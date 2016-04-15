<?php

namespace AbstractFactory\Products;

use AbstractFactory\ManufactureMotorcycle;

/**
 * Class BMWMotorcycle a product - BMW Motorcycle
 * @package AbstractFactory\Products
 */
class BMWMotorcycle extends ManufactureMotorcycle
{
    public function getMotorcycleManufacturer()
    {
        return 'This motorcycle was produced by BMWMotorcycle';
    }
}
