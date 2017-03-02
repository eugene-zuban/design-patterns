<?php

namespace FactoryMethod;

/**
 * Class HondaCreator a creator that implements our Factory Method
 */
class HondaCreator implements CarCreator
{
    /**
     * @return \FactoryMethod\HondaCar
     */
    public function createCar()
    {
      return new HondaCar();
    }
}
