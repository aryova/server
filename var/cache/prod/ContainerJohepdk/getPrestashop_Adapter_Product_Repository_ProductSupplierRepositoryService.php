<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.repository.product_supplier_repository' shared service.

return $this->services['prestashop.adapter.product.repository.product_supplier_repository'] = new \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ar_', ${($_ = isset($this->services['prestashop.adapter.product.validate.product_supplier_validator']) ? $this->services['prestashop.adapter.product.validate.product_supplier_validator'] : $this->load('getPrestashop_Adapter_Product_Validate_ProductSupplierValidatorService.php')) && false ?: '_'});
