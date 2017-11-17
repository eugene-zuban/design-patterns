<?php

namespace FactoryMethod;

/**
 * Interface CarCreator an interface specifies Factory Method
 */
interface CarCreator
{
    /**
     * @return ProductCar
     */
    public function createCar();
}
