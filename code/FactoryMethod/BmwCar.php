<?php

namespace FactoryMethod;

/**
 * Class BmwCar a concrete product returned from the BmwCreator factory
 */
class BmwCar extends ProductCar
{
    /**
     * @var string
     */
    protected $manufacture = 'BMW';

    /**
     * @param int $price
     */
    public function setInternalPrice($price)
    {
        $this->sellPrice = $price * 3;
    }
}
