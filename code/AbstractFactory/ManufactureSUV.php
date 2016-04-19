<?php

namespace AbstractFactory;

/**
 * Class ManufactureSUV is an interface for SUVs
 * @package AbstractFactory
 */
abstract class ManufactureSUV
{
    abstract public function getSUVManufacturer();

    /**
     * Returns current Manufacture's vehicle type
     * @return string
     */
    public function vehicleType()
    {
        return 'SUV';
    }
}
