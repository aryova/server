<?php

require_once __DIR__ . '/classes/Queries/QueryException.php';
require_once __DIR__ . '/classes/Queries/ExportQuery.php';
require_once __DIR__ . '/classes/Queries/ProductQuery.php';
require_once __DIR__ . '/classes/Queries/CustomerQuery.php';
require_once __DIR__ . '/classes/Queries/OrderQuery.php';

use ShopifyExport\Queries\QueryException;

class AdminExportToShopifyController extends ModuleAdminController
{

    const SEPARATOR = ',';


    private static $queries = array(
        'products' => array(
            'filename' => 'products_combinations_sql.csv',
            'class' => 'ShopifyExport\Queries\ProductQuery'
        ),
        'customers' => array(
            'filename' => 'customers.csv',
            'class' => 'ShopifyExport\Queries\CustomerQuery'
        ),
        'orders' => array(
            'filename' => 'orders.csv',
            'class' => 'ShopifyExport\Queries\OrderQuery'
        ),
    );

    public function __construct()
    {
        $this->bootstrap = true;

        parent::__construct();


        if (!$this->module->active) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminHome'));
        }
    }

    public function renderView()
    {
        return $this->renderConfigurationForm();
    }

    public function renderConfigurationForm()
    {
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $languages = Language::getLanguages();

        $options = array();
        foreach ($languages as $key => $language) {
            $options[] = array('id_option' => $language['id_lang'], 'name' => $language['name']);
        }

        $inputs = array(
            array(
                'type' => 'select',
                'label' => $this->l('Language'),
                'desc' => $this->l('Choose a language you wish to export'),
                'name' => 'export_language',
                'class' => 't',
                'options' => array(
                    'query' => $options,
                    'id' => 'id_option',
                    'name' => 'name'
                ),
                'condition' => count($options) > 1,
            ),
            array(
                'type' => 'checkbox',
                'label' => $this->l('Export'),
                'desc' => $this->l('Choose which data you wish to export.'),
                'name' => 'export',
                'values' => array(
                    'query' => array(
                        array(
                            'id' => 'products',
                            'val' => 1,
                            'name' => $this->l('Product and combinations'),
                        ),
                        array(
                            'id' => 'customers',
                            'val' => 1,
                            'name' => $this->l('Customers'),
                        ),
                        array(
                            'id' => 'orders',
                            'val' => 1,
                            'name' => $this->l('Orders'),
                        )
                    ),
                    'id' => 'id',
                    'name' => 'name',
                    'val' => 'val',
                ),
            ),
        );

        $fieldsForm = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Export your store for Shopify'),
                    'icon' => 'icon-cogs'
                ),
                'description' => $this->l('Click "Export" to generate a file that contains all the necessary information for you to import your store\'s data into Shopify.'),
                'input' => $inputs,
                'submit' => array(
                    'title' => $this->l('Export'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;

        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get(
            'PS_BO_ALLOW_EMPLOYEE_FORM_LANG'
        ) : 0;
        $this->fields_form = array();
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitExport';
        $helper->currentIndex = self::$currentIndex;
        $helper->token = Tools::getAdminTokenLite('AdminExportToShopify');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fieldsForm));
    }


    public function getConfigFieldsValues()
    {
        return array(
            'export_language' => (int)Configuration::get('PS_LANG_DEFAULT'),
            'export_products' => 1,
            'export_customers' => 1,
            'export_orders' => 1,
        );
    }

    public function postProcess()
    {
        if (!Tools::isSubmit('submitExport')) {
            return;
        }

        $languageId = Tools::getValue('export_language', (int)Configuration::get('PS_LANG_DEFAULT'));
        $shopId = (int)$this->context->shop->id;

        set_time_limit(0);

        $zipFileName = tempnam(sys_get_temp_dir(), 'zip');
        $zipArchive = new ZipArchive();
        $zipArchive->open($zipFileName, ZipArchive::CREATE);

        try {
            foreach (self::$queries as $key => $data) {
                $checked = Tools::getValue('export_' . $key, false);
                if (!$checked) {
                    continue;
                }

                $queryClass = $data['class'];
                $filename = $data['filename'];
                /** @var \ShopifyExport\Queries\ExportQuery $query */
                $query = new $queryClass;

                $iterator = $query->execute($shopId, $languageId);
                $csvFileName = $this->arrayToCsvFile($iterator);
                if ($csvFileName !== false) {
                    $zipArchive->addFile($csvFileName, $filename);
                }
            }
        } catch (QueryException $e) {
            if (defined('_PS_MODE_DEV_') && _PS_MODE_DEV_) {
                throw new PrestaShopException($e->getMessage() . "\n" . $e->getDetails());
            }
            $this->errors[] = Tools::displayError($this->l($e->getMessage()));
            return;
        }

        $zipArchive->close();

        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header('Content-Type: application/zip; charset=utf-8');
        header("Content-Disposition: attachment; filename=shop_data_export.zip");
        header("Expires: 0");
        header("Pragma: public");

        readfile($zipFileName);
        unlink($zipFileName);
        exit;
    }

    public function initContent()
    {
        $this->content = $this->renderView();
        parent::initContent();
    }

    /**
     * @param iterable $results
     * @return string|false Filename
     */
    private function arrayToCsvFile($results)
    {
        $csvFileName = tempnam(sys_get_temp_dir(), 'zip');

        $headersPrinted = false;

        foreach ($results as $result) {
            if (!$headersPrinted) {
                $output = fopen($csvFileName, 'w');
                fputcsv($output, array_keys($result), self::SEPARATOR);
                $headersPrinted = true;
            }
            fputcsv($output, $result, self::SEPARATOR);
        }

        if (!$headersPrinted) {
            return false;
        }
        fclose($output);

        return $csvFileName;
    }
}
