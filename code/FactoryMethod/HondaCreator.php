<?php

namespace FactoryMethod;

/**
 * Class HondaCreator a creator that implements Factory Method.
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
