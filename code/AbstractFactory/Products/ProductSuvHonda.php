<?php

namespace AbstractFactory\Products;

use AbstractFactory\ProductSuv;

/**
 * Class ProductSuvHonda a product of/for HondaFactory concrete factory
 * @package AbstractFactory\Products
 */
class ProductSuvHonda extends ProductSuv
{
    /**
     * Returns SUV manufacturer
     *
     * @return string
     */
    public function getSuvManufacturer()
    {
        return 'Honda';
    }
}
