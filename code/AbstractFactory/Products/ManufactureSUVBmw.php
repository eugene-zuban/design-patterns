<?php

namespace AbstractFactory\Products;

use AbstractFactory\ManufactureSUV;

/**
 * Class ManufactureSUVBmw represents a product of/for MotorcadeBmw concrete factory
 * @package AbstractFactory\Products
 */
class ManufactureSUVBmw extends ManufactureSUV
{
    /**
     * Returns SUV's manufacturer
     *
     * @return string
     */
    public function getSUVManufacturer()
    {
        return 'BMW';
    }
}
