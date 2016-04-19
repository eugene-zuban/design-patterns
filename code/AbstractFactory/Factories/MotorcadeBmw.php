<?php

namespace AbstractFactory\Factories;

use AbstractFactory\MotorcadeFactory;
use AbstractFactory\Products\ManufactureMotorcycleBmw;
use AbstractFactory\Products\ManufactureSUVBmw;

/**
 * Class MotorcadeBmw Concrete Factory for creating a set of BMW products
 * @package AbstractFactory\Factories
 */
class MotorcadeBmw implements MotorcadeFactory
{
    /**
     * Creates a BMW SUV product
     * @return ManufactureSUVBmw
     */
    public function addSUV()
    {
        return new ManufactureSUVBmw();
    }

    /**
     * @return ManufactureMotorcycleBmw
     */
    public function addMotorcycle()
    {
        return new ManufactureMotorcycleBmw();
    }
}
