<?php

require (__DIR__ . '/../../vendor/autoload.php');

//create a Honda car using HondaCreator factory
$product = (new \FactoryMethod\HondaCreator())->createCar();
$product->setModel('Accord');
$product->setYear(2017);
$product->setInternalPrice(15000);

$products[] = $product;

//create a Bmw car using BmwCreator factory
$product = (new \FactoryMethod\BmwCreator())->createCar();
$product->setModel('M7');
$product->setYear(2016);
$product->setInternalPrice(25000);

$products[] = $product;

//print all the products
//because all the products share the same interface, we can access them uniformly
/** @var \FactoryMethod\ProductCar $product */
foreach ($products as $product) {
    print ('Manufacture: ' . $product->manufacture() . PHP_EOL);
    print ('Model: ' . $product->model() . PHP_EOL);
    print ('Year: ' . $product->year() . PHP_EOL);
    print ('Selling Price: ' . $product->sellPrice() . PHP_EOL);
    print (PHP_EOL);
}
