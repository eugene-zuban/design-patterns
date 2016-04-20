<?php

require (__DIR__ . '/../../vendor/autoload.php');

//lets consider that we have 2 different manufacturer (factories) that produce the same products (vehicles) types
//for doing this we have to use 2 concrete factory: the first one for Bmw and the second for Honda
$factories = [
    'BMW' => new \AbstractFactory\Factories\BmwFactory(),
    'Honda' => new \AbstractFactory\Factories\HondaFactory(),
];

//now lets create some vehicles with our factories and print some info about them
//the benefit of using Abstract Factory is that we use the same product's and factory's interface
//for work with different types of products and we are able to create a family of related products (by manufacturer)
/** @var \AbstractFactory\Factory $factory */
foreach ($factories as $factory) {
    //create vehicles using our $factory - concrete factory
    $suv = $factory->createSuv();
    $motorcycle = $factory->createMotorcycle();

    //print out some info about current vehicles (products)
    print ("Motorcade (a products family) " . get_class($factory) . "\n");
    print ("\t{$suv->vehicleType()} was manufactured by: {$suv->getSuvManufacturer()}\n");
    print ("\t{$motorcycle->vehicleType()} was manufactured by: {$motorcycle->getMotorcycleManufacturer()}\n");
    print ("--------------------------------------------\n");
}
