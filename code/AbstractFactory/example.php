<?php

require (__DIR__ . '/../../vendor/autoload.php');

//let's consider that we have 2 different manufacturer (factories) that produce similar product (vehicles) types
//for doing that we need to use 2 concrete factories: the first one is for Bmw and the second is for Honda
$factories = [
    'BMW' => new \AbstractFactory\Factories\BmwFactory(),
    'Honda' => new \AbstractFactory\Factories\HondaFactory(),
];

// now let's create vehicles using our factories and print information about them.
// The benefit of using Abstract Factory is we use the same product and factory interfaces
// for working with different types of products, and we can create a family of related products by switching the factory.
/** @var \AbstractFactory\Factory $factory */
foreach ($factories as $factory) {
    $suv = $factory->createSuv();
    $motorcycle = $factory->createMotorcycle();

    print ("Current factory is: " . get_class($factory) . "\n");
    print ("\t{$suv->vehicleType()} was manufactured by: {$suv->getSuvManufacturer()}\n");
    print ("\t{$motorcycle->vehicleType()} was manufactured by: {$motorcycle->getMotorcycleManufacturer()}\n");
    print ("--------------------------------------------\n");
}
