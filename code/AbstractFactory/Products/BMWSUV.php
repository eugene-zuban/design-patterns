<?php

namespace AbstractFactory\Products;

use AbstractFactory\ManufactureSUV;

/**
 * Class BMWSUV represents a product - BMW SUV
 * @package AbstractFactory\Products
 */
class BMWSUV extends ManufactureSUV
{
    public function getSUVManufacturer()
    {
        return 'SUV manufactured by MotorcadeBMW';
    }
}
