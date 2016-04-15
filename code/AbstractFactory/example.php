<?php

//create an associative array of motorcades. Each subarray will represent a specific manufacturer motorcade
$motorcade = new \AbstractFactory\Factories\MotorcadeBMW();

$suv = $motorcade->addSUV();
$suv->getSUVManufacturer();

$motorcycle = $motorcade->addMotorcycle();
$motorcycle->getMotorcycleManufacturer();