<?php

/**
 * Class AbstractFactoryTest testing an Abstract Factory
 */
class AbstractFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testAbstractFactoryExists()
    {
        $this->assertTrue(interface_exists(AbstractFactory\MotorcadeFactory::class));
    }
}
