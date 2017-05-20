<?php
/**
 * TestModuleSample plugin for Magento
 *
 * @package     Yireo_TestModuleSample
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

namespace Yireo\TestModuleSample\Model\Product\Type\Sample;

use Magento\Catalog\Model\Product\Type\Price as ProductPrice;

/**
 * Class Price
 *
 * @package Yireo\TestModuleSample\Model\Product\Type\Sample
 */
class Price extends ProductPrice
{
    /**
     * @param \Magento\Catalog\Model\Product $product
     *
     * @return float
     */
    public function getPrice($product)
    {
        $normalPrice = parent::getPrice($product);
        if ($product->getData('discount') > 0) {
            return $normalPrice - $product->getDiscount();
        }

        return $normalPrice;
    }
}