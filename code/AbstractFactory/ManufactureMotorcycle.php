<?php

namespace AbstractFactory;

/**
 * Class ManufactureMotorcycle Abstract Motorcycle Product type
 * @package AbstractFactory
 */
abstract class ManufactureMotorcycle
{
    abstract function getMotorcycleManufacturer();

    /**
     * Returns current Manufacture's vehicle type
     * @return string
     */
    public function vehicleType()
    {
        return 'Motorcycle';
    }
}
