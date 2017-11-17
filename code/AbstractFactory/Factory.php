<?php

namespace AbstractFactory;

/**
 * Interface Factory specifies methods for creating different type of vehicles.
 *
 * @package AbstractFactory
 */
interface Factory
{
    /**
     * @return ProductSuv
     */
    public function createSuv();

    /**
     * @return ProductMotorcycle
     */
    public function createMotorcycle();
}
