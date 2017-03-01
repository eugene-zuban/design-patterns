<?php

namespace AbstractFactory;

/**
 * @package AbstractFactory
 */
abstract class ProductMotorcycle
{
    /**
     * @return string
     */
    abstract function getMotorcycleManufacturer();

    /**
     * @return string
     */
    public function vehicleType()
    {
        return 'Motorcycle';
    }
}
