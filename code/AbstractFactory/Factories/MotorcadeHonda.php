<?php

namespace AbstractFactory\Factories;

use AbstractFactory\MotorcadeFactory;
use AbstractFactory\Products\ManufactureMotorcycleHonda;
use AbstractFactory\Products\ManufactureSUVHonda;

/**
 * Class MotorcadeHonda Concrete Factory for creating a Honda Motorcade
 * @package AbstractFactory\Factories
 */
class MotorcadeHonda implements MotorcadeFactory
{
    /**
     * Creates a Honda SUV product
     * @return ManufactureSUVHonda
     */
    public function addSUV()
    {
        return new  ManufactureSUVHonda();
    }

    /**
     * Creates a Honda Motorcycle product
     * @return ManufactureMotorcycleHonda
     */
    public function addMotorcycle()
    {
        return new ManufactureMotorcycleHonda();
    }
}
