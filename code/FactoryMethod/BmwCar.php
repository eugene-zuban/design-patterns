<?php

namespace FactoryMethod;

/**
 * Class BmwCar a concrete product returned from the BmwCreator factory
 */
class BmwCar extends ProductCar
{
    /**
     * @param int $internalPrice
     */
    public function setSellPrice($internalPrice)
    {
        $this->sellPrice = $internalPrice * 3;
    }
}
