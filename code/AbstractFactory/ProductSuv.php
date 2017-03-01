<?php

namespace AbstractFactory;

/**
 * @package AbstractFactory
 */
abstract class ProductSuv
{
    /**
     * @return string
     */
    abstract public function getSuvManufacturer();

    /**
     * @return string
     */
    public function vehicleType()
    {
        return 'SUV';
    }
}
