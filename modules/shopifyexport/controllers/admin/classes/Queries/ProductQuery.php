<?php

namespace ShopifyExport\Queries;

use Db;

class ProductQuery implements ExportQuery
{
    public function execute($shopId, $languageId)
    {
        \Product::$_taxCalculationMethod = PS_TAX_INC;
        $products = \Product::getProducts($languageId, 0, 0, 'id_product', 'ASC');

        foreach ($products as $product) {
            $productArray = $this->makeProductArray($product, $languageId);
            $lightProduct = new \Product($product['id_product'], false);

            $attributes = [];
            if (\Combination::isFeatureActive()) {
                $combinationImages = $lightProduct->getCombinationImages($languageId) ?: [];
                foreach ($lightProduct->getAttributeCombinations($languageId) as $attribute) {
                    if ($attribute === []) {
                        continue;
                    }
                    if (!isset($attributes[$attribute['id_product_attribute']])) {
                        $data = $this->makeCombinationArray($attribute, $combinationImages, $languageId);
                        $attributes[$attribute['id_product_attribute']] = $data;
                    } else {
                        // append values to the existing data
                        $attributes[$attribute['id_product_attribute']]['Combination:Attribute (Name:Type:Position)*'] .= ',' . $attribute['group_name'] . '::';
                        $attributes[$attribute['id_product_attribute']]['Combination:Value (Value:Position)*'] .= ',' . $attribute['attribute_name'] . '::';
                    }
                }
            }

            // Empty Combination
            if ($attributes === []) {
                $attributes = array(array());
            }

            foreach ($attributes as $attribute) {
                yield array_merge($productArray, $attribute);
            }

        }
    }

    private function makeImagesArray($languageId, $productId)
    {
        $images = \Image::getImages($languageId, $productId);
        $urls = array();
        foreach ($images as $data) {
            $image = new \Image($data['id_image'], $languageId);
            $urls[] = _PS_BASE_URL_ . _THEME_PROD_DIR_ . $image->getExistingImgPath() . ".jpg";
        }
        return $urls;
    }

    private function makeCombinationImagesArray($data, $productAttributeId, $languageId)
    {
        $images = isset($data[(int)$productAttributeId]) ? $data[(int)$productAttributeId] : [];
        $urls = array();
        foreach ($images as $data) {
            $image = new \Image($data['id_image'], $languageId);
            $urls[] = _PS_BASE_URL_ . _THEME_PROD_DIR_ . $image->getExistingImgPath() . ".jpg";
        }
        return $urls;
    }

    private function getCategoryNames(array $product, $languageId)
    {
        $categories = \Product::getProductCategoriesFull($product['id_product'], $languageId);

        $names = array();
        foreach ($categories as $category) {
            $names[] = $category['name'];
        }
        return implode(',', $names);
    }

    private function getTagNames(array $product, $languageId)
    {
        $languageTags = \Tag::getProductTags($product['id_product']);

        $tags = isset($languageTags[$languageId]) ? $languageTags[$languageId] : [];

        return implode(',', $tags);
    }

    /**
     * @param array $product
     * @param array $properties
     * @param int $languageId
     * @return array
     */
    private function makeProductArray(array $product, $languageId)
    {
        $properties = \Product::getProductProperties($languageId, $product);
        return array(
            'Product:Product ID' => $product['id_product'],
            'Product:Active (0/1)' => $product['active'],
            'Product:Name *' => $product['name'],
            'Product:Categories (x,y,z...)' => $this->getCategoryNames($product, $languageId),
            'Product:Price tax included' => \Product::getPriceStatic(
                $product['id_product'], 
                false,
                6,
                null,
                false,
                false
            ),
            'Product:Unit Price Reference Unit' => $product['unity'],
            'Product:Unit Price Ratio' => $product['unit_price_ratio'],
            'Product:Wholesale price' => $product['wholesale_price'],
            'Product:Reference #' => $product['reference'],
            'Product:Supplier reference #' => $product['supplier_reference'],
            'Product:Supplier' => '', // Skip as we don't use
            'Product:Manufacturer' => $product['manufacturer_name'],
            'Product:EAN13' => $product['ean13'],
            'Product:UPC' => $product['upc'],
            'Product:Width' => $product['width'],
            'Product:Height' => $product['height'],
            'Product:Depth' => $product['depth'],
            'Product:Weight' => $product['weight'],
            'Product:Quantity' => $properties['quantity_all_versions'],
            'Product:Visibility' => '', // Skip as we don't use
            'Product:Short description' => $properties['description_short'],
            'Product:Description' => $product['description'],
            'Product:Tags (x,y,z...)' => $this->getTagNames($product, $languageId),
            'Product:Meta title' => $product['meta_title'],
            'Product:Meta keywords' => $product['meta_keywords'],
            'Product:Meta description' => $product['meta_description'],
            'Product:Available for order (0 = No, 1 = Yes)' => $product['available_for_order'],
            'Product:Image URLs (x,y,z...)' => implode(
                ',',
                $this->makeImagesArray($languageId, $product['id_product'])
            ),
            'Product:Virtual product (0 = No, 1 = Yes)' => $product['is_virtual'],
            'Combination:Attribute (Name:Type:Position)*' => '',
            'Combination:Value (Value:Position)*' => '',
            'Combination:Variant Id' => '',
            'Combination:Supplier reference' => '',
            'Combination:Reference' => '',
            'Combination:EAN13' => '',
            'Combination:UPC' => '',
            'Combination:Cost price' => '',
            'Combination:Impact on price' => '',
            'Combination:Impact on unit price' => '',
            'Combination:Quantity' => '',
            'Combination:Impact on weight' => '',
            'Combination:Default (0 = No, 1 = Yes)' => '',
            'Combination:Image URLs (x,y,z...)' => '',
        );
    }

    /**
     * @param array $attribute
     * @param array $combinationImages
     * @param int $languageId
     * @return array
     */
    private function makeCombinationArray($attribute, array $combinationImages, $languageId)
    {
        return array(
            'Combination:Attribute (Name:Type:Position)*' => $attribute['group_name'] . '::',
            'Combination:Value (Value:Position)*' => $attribute['attribute_name'] . '::',
            'Combination:Variant Id' => $attribute['id_product_attribute'],
            'Combination:Supplier reference' => $attribute['supplier_reference'],
            'Combination:Reference' => $attribute['reference'],
            'Combination:EAN13' => $attribute['ean13'],
            'Combination:UPC' => $attribute['upc'],
            'Combination:Cost price' => $attribute['wholesale_price'],
            'Combination:Impact on price' => $attribute['price'],
            'Combination:Impact on unit price' => $attribute['unit_price_impact'],
            'Combination:Quantity' => $attribute['quantity'],
            'Combination:Impact on weight' => $attribute['weight'],
            'Combination:Default (0 = No, 1 = Yes)' => $attribute['default_on'] == '1' ? '1' : '0',
            'Combination:Image URLs (x,y,z...)' => implode(
                ',',
                $this->makeCombinationImagesArray(
                    $combinationImages,
                    $attribute['id_product_attribute'],
                    $languageId
                )
            ),
        );
    }
}