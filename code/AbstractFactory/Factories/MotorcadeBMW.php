<?php

namespace AbstractFactory\Factories;

use AbstractFactory\MotorcadeFactory;
use AbstractFactory\Products\BMWMotorcycle;
use AbstractFactory\Products\BMWSUV;

/**
 * Class MotorcadeBMW Concrete Factory for creating a set of BMW products
 * @package AbstractFactory\Factories
 */
class MotorcadeBMW implements MotorcadeFactory
{

    /**
     * Creates a BMW SUV product
     * @return BMWSUV
     */
    public function addSUV()
    {
        return new BMWSUV();
    }

    /**
     * @return BMWMotorcycle
     */
    public function addMotorcycle()
    {
        return new BMWMotorcycle();
    }

    public function addArmoredCar()
    {

    }

    public function addLimo()
    {

    }

    public function addSedan()
    {

    }
}
