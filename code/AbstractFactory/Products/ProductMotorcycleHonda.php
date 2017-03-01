<?php

namespace AbstractFactory\Products;

use AbstractFactory\ProductMotorcycle;

/**
 * Class ProductMotorcycleHonda a product produced by the HondaFactory concrete factory.
 *
 * @package AbstractFactory\Products
 */
class ProductMotorcycleHonda extends ProductMotorcycle
{
    /**
     * @return string
     */
    public function getMotorcycleManufacturer()
    {
        return 'Honda';
    }
}
