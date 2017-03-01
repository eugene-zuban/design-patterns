<?php

namespace AbstractFactory\Products;

use AbstractFactory\ProductSuv;

/**
 * Class ProductSuvBmw represents a product produced by BmwFactory concrete factory.
 *
 * @package AbstractFactory\Products
 */
class ProductSuvBmw extends ProductSuv
{
    /**
     * @return string
     */
    public function getSuvManufacturer()
    {
        return 'BMW';
    }
}
