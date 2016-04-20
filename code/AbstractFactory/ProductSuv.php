<?php

namespace AbstractFactory;

/**
 * Class ProductSuv is an interface for creating SUV products (Abstract SUV Product)
 * @package AbstractFactory
 */
abstract class ProductSuv
{
    abstract public function getSuvManufacturer();

    /**
     * Returns current Manufacture's vehicle type
     * @return string
     */
    public function vehicleType()
    {
        return 'SUV';
    }
}
