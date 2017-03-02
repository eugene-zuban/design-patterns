<?php

namespace FactoryMethod;

/**
 * Interface CarCreator an interface specifies factory method
 */
interface CarCreator
{
    /**
     * @return ProductCar
     */
    public function createCar();
}
