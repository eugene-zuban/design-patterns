<?php

namespace AbstractFactory\Products;

use AbstractFactory\ProductMotorcycle;

/**
 * Class ProductMotorcycleBmw a product of/for BmwFactory concrete factory
 * @package AbstractFactory\Products
 */
class ProductMotorcycleBmw extends ProductMotorcycle
{
    /**
     * Returns Motorcycle's manufacturer
     *
     * @return string
     */
    public function getMotorcycleManufacturer()
    {
        return 'BMW';
    }
}
