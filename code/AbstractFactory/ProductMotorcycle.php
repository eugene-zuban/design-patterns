<?php

namespace AbstractFactory;

/**
 * Class ProductMotorcycle is an Abstract Motorcycle Product type
 * @package AbstractFactory
 */
abstract class ProductMotorcycle
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
