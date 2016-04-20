<?php

namespace AbstractFactory;

/**
 * Interface Factory describes methods for creating a specific type of vehicles
 *
 * Concrete Factories could be a vendor-specific factories which would create vehicles only of that vendor,
 * for example: BmwFactory, HondaFactory, etc
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
