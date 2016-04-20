<?php

namespace AbstractFactory\Products;

use AbstractFactory\ProductSuv;

/**
 * Class ProductSuvBmw represents a product of/for BmwFactory concrete factory
 * @package AbstractFactory\Products
 */
class ProductSuvBmw extends ProductSuv
{
    /**
     * Returns SUV's manufacturer
     *
     * @return string
     */
    public function getSuvManufacturer()
    {
        return 'BMW';
    }
}
