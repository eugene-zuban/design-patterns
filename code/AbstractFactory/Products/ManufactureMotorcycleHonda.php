<?php

namespace AbstractFactory\Products;

use AbstractFactory\ManufactureMotorcycle;

/**
 * Class ManufactureMotorcycleHonda a product of/for MotorcadeHonda concrete factory
 *
 * @package AbstractFactory\Products
 */
class ManufactureMotorcycleHonda extends ManufactureMotorcycle
{
    /**
     * Returns Motorcycle's manufacturer
     *
     * @return string
     */
    public function getMotorcycleManufacturer()
    {
        return 'Honda';
    }
}
