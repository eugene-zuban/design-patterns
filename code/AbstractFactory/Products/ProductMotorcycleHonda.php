<?php

namespace AbstractFactory\Products;

use AbstractFactory\ProductMotorcycle;

/**
 * Class ProductMotorcycleHonda a product of/for HondaFactory concrete factory
 *
 * @package AbstractFactory\Products
 */
class ProductMotorcycleHonda extends ProductMotorcycle
{
    /**
     * Returns Motorcycle's manufacturer
     *
     * @return string
     */
    public function getMotorcycleManufacturer()
    {
        return 'Honda';
    }
}
