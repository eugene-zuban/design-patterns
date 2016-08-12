<?php

/**
 * Class FactoryMethodTest testing the Factory Method
 */
class FactoryMethodTest extends PHPUnit_Framework_TestCase
{
    public function testThatFactoryClassesExists()
    {
        $this->assertTrue(interface_exists(\FactoryMethod\CarCreator::class));

        $this->assertTrue(class_exists(\FactoryMethod\HondaCreator::class));

        $this->assertTrue(class_exists(\FactoryMethod\BmwCreator::class));
    }

    public function testThatProductsExist()
    {
        $this->assertTrue(interface_exists(\FactoryMethod\ProductCar::class));

        $this->assertTrue(class_exists(\FactoryMethod\HondaCar::class));

        $this->assertTrue(class_exists(\FactoryMethod\BmwCar::class));
    }
}
