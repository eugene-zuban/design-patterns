<?php

namespace FactoryMethod;

/**
 * Class HondaCar a concrete product returned from the HondaCreator factory
 */
class HondaCar extends ProductCar
{
    /**
     * @param int $internalPrice
     */
    public function setSellPrice($internalPrice)
    {
        $this->sellPrice = $internalPrice * 2;
    }
}
