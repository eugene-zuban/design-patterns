<?php

namespace FactoryMethod;

/**
 * Class HondaCar a concrete product that HondaCreator Factory returns.
 */
class HondaCar extends ProductCar
{
    /**
     * @var string
     */
    protected $manufacture = 'Honda';

    /**
     * @param int $price
     */
    public function setInternalPrice($price)
    {
        $this->sellPrice = $price * 2;
    }
}
