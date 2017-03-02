<?php

namespace FactoryMethod;

/**
 * Class BmwCreator a factory that implements our Factory Method
 */
class BmwCreator implements CarCreator
{
    /**
     * @return \FactoryMethod\BmwCar
     */
    public function createCar()
    {
        return new BmwCar();
    }
}
