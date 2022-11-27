<?php
/**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class ShopifyExport extends Module
{
    const CONTROLLER_CLASS = 'AdminExportToShopify';

    protected $config_form = false;

    protected $minimum_php_version;

    public function __construct()
    {
        $this->name = 'shopifyexport';
        $this->tab = 'export';
        $this->version = '1.2.2';
        $this->author = 'Shopify';
        $this->need_instance = 0;

        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Export for Shopify');
        $this->description = $this->l('Export your store\'s data for an easy migration to Shopify.');

        $this->minimum_php_version = '5.5';
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        if (!parent::install() || !$this->checkPhpVersion()) {
            return false;
        }
        $this->installController();

    }

    private function installController()
    {
        $this->uninstallController();

        $parentTabId = Tab::getIdFromClassName('Configure');
        if (!$parentTabId) {
            $parentTabId = Tab::getIdFromClassName('Default');
        }
        $tab = new Tab();
        $tab->icon = 'cloud_download';
        $tab->class_name = self::CONTROLLER_CLASS;
        $tab->id_parent = $parentTabId;
        $tab->module = $this->name;
        foreach (Language::getLanguages(false) as $lang) {
            $tab->name[(int)$lang['id_lang']] = $this->displayName;
        }
        $tab->save();
    }

    public function uninstall()
    {
        $this->uninstallController();
        return parent::uninstall();
    }

    public function uninstallController()
    {
        $tabId = TabCore::getIdFromClassName(self::CONTROLLER_CLASS);
        if ($tabId) {
            $tab = new Tab($tabId);
            $tab->delete();
        }
    }

    public function getContent()
    {
        Tools::redirectAdmin($this->context->link->getAdminLink(self::CONTROLLER_CLASS));
    }

    private function checkPhpVersion()
    {
        if (version_compare(phpversion(), $this->minimum_php_version, '<')) {
            $this->_errors[] = Tools::displayError('The version of your module requires PHP 5.5 or higher.');
            return false;
        }
        return true;
    }
}
