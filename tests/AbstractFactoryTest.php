<?php

/**
 * Class AbstractFactoryTest testing an Abstract Factory
 */
class AbstractFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testAbstractFactoryExists()
    {
        $this->assertTrue(interface_exists(\AbstractFactory\Factory::class));
    }

    public function testGenericSUVManufactureExists()
    {
        $this->assertTrue(class_exists(\AbstractFactory\ProductSuv::class));
    }

    /**
     * @return array
     */
    public function motorcades()
    {
        return [
            ['BMW', new \AbstractFactory\Factories\BmwFactory()],
            ['Honda', new \AbstractFactory\Factories\HondaFactory()],
        ];
    }

    /**
     * @dataProvider motorcades()
     * @param string $manufacturer
     * @param \AbstractFactory\Factory $motorcadeFactory
     */
    public function testMotorcadeCreations($manufacturer, \AbstractFactory\Factory $motorcadeFactory)
    {
        //create a SUV using factory
        $suv = $motorcadeFactory->createSuv();

        //create a motorcycle using factory
        $motorcycle = $motorcadeFactory->createMotorcycle();

        //check if the SUV was produced by $manufacturer
        $this->assertEquals($manufacturer, $suv->getSuvManufacturer());

        //check if the Motorcycle was produced by $manufacturer
        $this->assertEquals($manufacturer, $motorcycle->getMotorcycleManufacturer());
    }
}
