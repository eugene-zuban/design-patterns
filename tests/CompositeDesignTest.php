<?php

/**
 * Class CompositeDesignTest
 */
class CompositeDesignTest extends \PHPUnit\Framework\TestCase
{
    public function testComposite()
    {
        //create a blank PC
        $computer = new Composite\CompositePart("My PC");
        $this->assertEquals(0, $computer->getPrice(), 'Computer price is incorrect');

        //create Motherboard
        $motherboard = new Composite\CompositePart("Motherboard");
        $motherboard->setPrice(700);
        $this->assertEquals(700, $motherboard->getPrice(), 'Motherboard price is incorrect');

        //add motherboard and check price
        $computer->add($motherboard);
        $this->assertEquals(700, $computer->getPrice(), 'Computer price is incorrect');

        //create CD ROM
        $cdRom = new \Composite\Part("Cd Rom");
        $this->assertEquals("Cd Rom", $cdRom->getName(), 'Part name is incorrect');

        //Check CD Rom Price
        $cdRom->setPrice(100);
        $this->assertEquals(100, $cdRom->getPrice(), 'CD Rom price is incorrect');

        //Create CPU
        $cpu = new \Composite\Part("CPU");
        $cpu->setPrice(500);

        //assembly PC
        $motherboard->add($cdRom);
        $motherboard->add($cpu);

        //Check summary PC Price
        $this->assertEquals(1300, $computer->getPrice(), 'Summary price is incorrect');

        //remove CDRom and check PC price
        $motherboard->remove($cdRom);
        $this->assertEquals(1200, $computer->getPrice(), 'Summary price is incorrect');
    }
}
