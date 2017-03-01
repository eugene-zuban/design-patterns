<?php

namespace AbstractFactory\Factories;

use AbstractFactory\Factory;
use AbstractFactory\Products\ProductMotorcycleHonda;
use AbstractFactory\Products\ProductSuvHonda;

/**
 * @package AbstractFactory\Factories
 */
class HondaFactory implements Factory
{
    /**
     * @return ProductSuvHonda
     */
    public function createSuv()
    {
        return new  ProductSuvHonda();
    }

    /**
     * @return ProductMotorcycleHonda
     */
    public function createMotorcycle()
    {
        return new ProductMotorcycleHonda();
    }
}
