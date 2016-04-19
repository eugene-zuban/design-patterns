<?php

namespace AbstractFactory;

/**
 * Interface MotorcadeFactory describes methods to adding a specific type of vehicle to a Motorcade
 *
 * Concrete Factories could be a vendor-specific factories which would add vehicles only of that vendor to a Motorcade,
 * for example: MotorcadeBmw, MotorcadeHonda, etc
 *
 * @package AbstractFactory
 */
interface MotorcadeFactory
{
    /**
     * @return ManufactureSUV
     */
    public function addSUV();

    /**
     * @return ManufactureMotorcycle
     */
    public function addMotorcycle();
}
