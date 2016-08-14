<?php

namespace FactoryMethod;

/**
 * Class BmwCreator a creator declares the factory method
 */
class BmwCreator implements CarCreator
{
    /**
     * Factory Method returns a BmwCar product (object)
     *
     * @return \FactoryMethod\BmwCar
     */
    public function carFactory()
    {
        return new BmwCar();
    }
}
