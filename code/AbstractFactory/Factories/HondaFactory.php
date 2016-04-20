<?php

namespace AbstractFactory\Factories;

use AbstractFactory\Factory;
use AbstractFactory\Products\ProductMotorcycleHonda;
use AbstractFactory\Products\ProductSuvHonda;

/**
 * Class HondaFactory is a Concrete Factory for creating a Honda Motorcade
 * @package AbstractFactory\Factories
 */
class HondaFactory implements Factory
{
    /**
     * Creates a Honda SUV product
     * @return ProductSuvHonda
     */
    public function createSuv()
    {
        return new  ProductSuvHonda();
    }

    /**
     * Creates a Honda Motorcycle product
     * @return ProductMotorcycleHonda
     */
    public function createMotorcycle()
    {
        return new ProductMotorcycleHonda();
    }
}
