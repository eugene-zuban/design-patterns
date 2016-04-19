<?php

namespace AbstractFactory\Products;

use AbstractFactory\ManufactureSUV;

/**
 * Class ManufactureSUVHonda a product of/for MotorcadeHonda concrete factory
 * @package AbstractFactory\Products
 */
class ManufactureSUVHonda extends ManufactureSUV
{
    /**
     * Returns SUV manufacturer
     *
     * @return string
     */
    public function getSUVManufacturer()
    {
        return 'Honda';
    }
}
