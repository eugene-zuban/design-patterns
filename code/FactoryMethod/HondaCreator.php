<?php

namespace FactoryMethod;

/**
 * Class HondaCreator a creator declares the factory method
 */
class HondaCreator implements CarCreator
{
    /**
     * Factory Method returns a HondaCar product (object)
     *
     * @return \FactoryMethod\HondaCar
     */
    public function carFactory()
    {
      return new HondaCar();
    }
}
