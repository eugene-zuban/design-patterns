<?php

class SingletonTest extends \PHPUnit\Framework\TestCase
{
    public function testSingletonPattern()
    {
        //creating the first object
        $first = Singleton\Singleton::instance();
        $this->assertInstanceOf(\Singleton\Singleton::class, $first);

        //try to create the second object of the same class
        $second = Singleton\Singleton::instance();
        $this->assertSame($first, $second);
    }
}
