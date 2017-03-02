<?php

/**
 * Class FactoryMethodTest testing the Factory Method
 */
class FactoryMethodTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \FactoryMethod\HondaCreator
     */
    protected $hondaFactory;

    /**
     * @var \FactoryMethod\BmwCreator
     */
    protected $bmwFactory;

    public function setUp()
    {
        $this->hondaFactory = new \FactoryMethod\HondaCreator();

        $this->bmwFactory = new \FactoryMethod\BmwCreator();
    }

    public function tearDown()
    {
        unset($this->hondaFactory);

        unset($this->bmwFactory);
    }


    /**
     * All creators (factories) need to use the same interface
     * for providing their clients ability to use any of them by the same way.
     *
     * Because all our factories implement the CarCreator interface,
     * we can assert that they are its instances.
     */
    public function testThatAllFactoriesImplementsTheSameInterface()
    {
        $this->assertTrue($this->hondaFactory instanceof \FactoryMethod\CarCreator);

        $this->assertTrue($this->bmwFactory instanceof \FactoryMethod\CarCreator);
    }

    /**
     * In the second test, we need to check that all our products provides the same "interface" (type) for a client.
     *
     * BmwCar & HondaCar need to extend the ProductCar class for that.
     */
    public function testThatAllProductsUseTheSameInterface()
    {
        $this->assertEquals(
            \FactoryMethod\ProductCar::class,
            get_parent_class(\FactoryMethod\BmwCar::class)
        );

        $this->assertEquals(
            \FactoryMethod\ProductCar::class,
            get_parent_class(\FactoryMethod\HondaCar::class)
        );
    }

    /**
     * Test that all factories return correct product types.
     *
     * @dataProvider dataForTestingFactories()
     * @param \FactoryMethod\ProductCar $product
     * @param string $expectedProductType
     */
    public function testThatFactoryWorks($product, $expectedProductType)
    {
        //checks that the product created within its factory has a correct type
        $this->assertInstanceOf($expectedProductType, $product);
    }


    /**
     * Provides data for testing our factories in the testThatFactoryWorks()
     *
     * @return array
     */
    public function dataForTestingFactories()
    {
        return [
            [
                (new \FactoryMethod\HondaCreator())->createCar(),
                \FactoryMethod\HondaCar::class
            ],

            [
                (new \FactoryMethod\BmwCreator())->createCar(),
                \FactoryMethod\BmwCar::class
            ]
        ];
    }
}
