<?php

require (__DIR__ . '/../../vendor/autoload.php');

//create a Honda car using the HondaCreator factory
$product = (new \FactoryMethod\HondaCreator())->carFactory();
$product->setModel('Accord');
$product->setYear(2017);
$product->setInternalPrice(15000);

$products[] = $product;

//create a Bmw car using the BmwCreator factory
$product = (new \FactoryMethod\BmwCreator())->carFactory();
$product->setModel('M7');
$product->setYear(2016);
$product->setInternalPrice(25000);

$products[] = $product;

//print all our products
//because all our products share the same interface, we can access them identically
/** @var \FactoryMethod\ProductCar $product */
foreach ($products as $product) {
    print ('Manufacture: ' . $product->manufacture() . PHP_EOL);
    print ('Model: ' . $product->model() . PHP_EOL);
    print ('Year: ' . $product->year() . PHP_EOL);
    print ('Selling Price: ' . $product->sellPrice() . PHP_EOL);
    print (PHP_EOL);
}
