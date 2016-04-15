<?php

namespace AbstractFactory\Products;

class ManufacturerSUVBMW extends ManufactureSUV
{
    public function getSUVManufacturer()
    {
        return 'SUV manufactured by BMW';
    }
}