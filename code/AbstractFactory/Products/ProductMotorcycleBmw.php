<?php

namespace AbstractFactory\Products;

use AbstractFactory\ProductMotorcycle;

/**
 * Class ProductMotorcycleBmw a product produced by BmwFactory concrete factory.
 *
 * @package AbstractFactory\Products
 */
class ProductMotorcycleBmw extends ProductMotorcycle
{
    /**
     * @return string
     */
    public function getMotorcycleManufacturer()
    {
        return 'BMW';
    }
}
