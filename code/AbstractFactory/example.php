<?php

require (__DIR__ . '/../../vendor/autoload.php');

//lets consider that we need 2 different motorcade that have the same products type (vehicles has a same manufacturer)
//for doing this we have to use 2 concrete factory: the first one for Bmw and the second for Honda
$motorcades = [
    'BMW' => new \AbstractFactory\Factories\MotorcadeBmw(),
    'Honda' => new \AbstractFactory\Factories\MotorcadeHonda(),
];

//now lets add vehicles to our motorcades and print some info about them
//the benefit of using Abstract Factory is that we use the same products and factory's interface
//for work with different types of products and we are able to create a family of related products (by manufacturer)
/** @var \AbstractFactory\MotorcadeFactory $motorcade */
foreach ($motorcades as $motorcade) {
    //create vehicles using our $motorcade concrete factory
    $suv = $motorcade->addSUV();
    $motorcycle = $motorcade->addMotorcycle();

    //print out some info about current vehicles (products)
    print ("Motorcade (a products family) " . get_class($motorcade) . "\n");
    print ("\t{$suv->vehicleType()} was manufactured by: {$suv->getSUVManufacturer()}\n");
    print ("\t{$motorcycle->vehicleType()} was manufactured by: {$motorcycle->getMotorcycleManufacturer()}\n");
    print ("--------------------------------------------\n");
}
