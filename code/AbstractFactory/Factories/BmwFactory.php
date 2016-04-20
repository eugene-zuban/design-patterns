<?php

namespace AbstractFactory\Factories;

use AbstractFactory\Factory;
use AbstractFactory\Products\ProductMotorcycleBmw;
use AbstractFactory\Products\ProductSuvBmw;

/**
 * Class BmwFactory is a Concrete Factory for creating a set of BMW products
 * @package AbstractFactory\Factories
 */
class BmwFactory implements Factory
{
    /**
     * Creates a BMW SUV product
     * @return ProductSuvBmw
     */
    public function createSuv()
    {
        return new ProductSuvBmw();
    }

    /**
     * @return ProductMotorcycleBmw
     */
    public function createMotorcycle()
    {
        return new ProductMotorcycleBmw();
    }
}
