<?php

use HeadFirst\SingletonPattern\Singleton;
use \PHPUnit\Framework\TestCase;

class FactoryPatternTest extends TestCase
{
    /**
     * @test
     */
    public function sanityCheck()
    {
        self::assertInstanceOf(Singleton::class, Singleton::getInstance());
    }
}
