<?php

namespace AbstractFactory;

/**
 * Interface MotorcadeFactory describes methods to adding a specific type of vehicle to a Motorcade
 *
 * Concrete Factories could be a vendor-specific factories which would add vehicles only of that vendor to a Motorcade,
 * for example: motorcadeBMW, motorcadeHonda, etc
 *
 * @package AbstractFactory
 */
interface MotorcadeFactory
{
    public function addSUV();

    public function addMotorcycle();

    public function addArmoredCar();

    public function addLimo();

    public function addSedan();
}
