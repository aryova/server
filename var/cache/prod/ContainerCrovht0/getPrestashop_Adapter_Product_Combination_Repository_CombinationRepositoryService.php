<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.combination.repository.combination_repository' shared service.

return $this->services['prestashop.adapter.product.combination.repository.combination_repository'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ar_', ${($_ = isset($this->services['prestashop.adapter.attribute.repository.attribute_repository']) ? $this->services['prestashop.adapter.attribute.repository.attribute_repository'] : $this->load('getPrestashop_Adapter_Attribute_Repository_AttributeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.product.combination.validate.combination_validator']) ? $this->services['prestashop.adapter.product.combination.validate.combination_validator'] : ($this->services['prestashop.adapter.product.combination.validate.combination_validator'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\Validate\CombinationValidator())) && false ?: '_'});
