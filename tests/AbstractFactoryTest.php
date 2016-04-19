<?php

/**
 * Class AbstractFactoryTest testing an Abstract Factory
 */
class AbstractFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testAbstractFactoryExists()
    {
        $this->assertTrue(interface_exists(\AbstractFactory\MotorcadeFactory::class));
    }

    public function testGenericSUVManufactureExists()
    {
        $this->assertTrue(class_exists(\AbstractFactory\ManufactureSUV::class));
    }

    /**
     * @return array
     */
    public function motorcades()
    {
        return [
            ['BMW', new \AbstractFactory\Factories\MotorcadeBmw()],
            ['Honda', new \AbstractFactory\Factories\MotorcadeHonda()],
        ];
    }

    /**
     * @dataProvider motorcades()
     * @param string $manufacturer
     * @param \AbstractFactory\MotorcadeFactory $motorcadeFactory
     */
    public function testMotorcadeCreations($manufacturer, \AbstractFactory\MotorcadeFactory $motorcadeFactory)
    {
        //create a SUV using factory
        $suv = $motorcadeFactory->addSUV();

        //create a motorcycle using factory
        $motorcycle = $motorcadeFactory->addMotorcycle();

        //check if the SUV was produced by $manufacturer
        $this->assertEquals($manufacturer, $suv->getSUVManufacturer());

        //check if the Motorcycle was produced by $manufacturer
        $this->assertEquals($manufacturer, $motorcycle->getMotorcycleManufacturer());
    }
}
