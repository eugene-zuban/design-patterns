<?php

namespace FactoryMethod;

/**
 * Class BmwCar a concrete product that BmwCreator factory returns.
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
