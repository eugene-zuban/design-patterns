<?php

namespace FactoryMethod;

/**
 * Interface CarCreator
 */
interface CarCreator
{
    /**
     * @return ProductCar
     */
    public function carFactory();
}
