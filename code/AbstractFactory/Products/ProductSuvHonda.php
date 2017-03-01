<?php

namespace AbstractFactory\Products;

use AbstractFactory\ProductSuv;

/**
 * Class ProductSuvHonda a product produced by HondaFactory concrete factory.
 *
 * @package AbstractFactory\Products
 */
class ProductSuvHonda extends ProductSuv
{
    /**
     * @return string
     */
    public function getSuvManufacturer()
    {
        return 'Honda';
    }
}
