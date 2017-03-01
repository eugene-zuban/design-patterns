<?php

namespace AbstractFactory\Factories;

use AbstractFactory\Factory;
use AbstractFactory\Products\ProductMotorcycleBmw;
use AbstractFactory\Products\ProductSuvBmw;

/**
 * @package AbstractFactory\Factories
 */
class BmwFactory implements Factory
{
    /**
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
