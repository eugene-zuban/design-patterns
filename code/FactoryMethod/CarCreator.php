<?php

namespace FactoryMethod;

/**
 * Interface CarCreator the interface of objects the factory method creates
 */
interface CarCreator
{
    /**
     * @return ProductCar
     */
    public function carFactory();
}
