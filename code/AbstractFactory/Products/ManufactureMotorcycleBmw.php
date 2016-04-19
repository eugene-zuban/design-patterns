<?php

namespace AbstractFactory\Products;

use AbstractFactory\ManufactureMotorcycle;

/**
 * Class ManufactureMotorcycleBmw a product of/for MotorcadeBmw concrete factory
 * @package AbstractFactory\Products
 */
class ManufactureMotorcycleBmw extends ManufactureMotorcycle
{
    /**
     * Returns Motorcycle's manufacturer
     *
     * @return string
     */
    public function getMotorcycleManufacturer()
    {
        return 'BMW';
    }
}
