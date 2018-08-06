<?php

use \PHPUnit\Framework\TestCase;

class StrategyPatternTest extends TestCase
{
    /**
     * @test
     */
    public function mallardDuckFlies()
    {
        $mallardDuck = new \HeadFirst\StrategyPattern\Ducks\MallardDuck();
        self::assertSame('fly', $mallardDuck->performFly());
    }

    /**
     * @test
     */
    public function mallardDuckQuacks()
    {
        $mallardDuck = new \HeadFirst\StrategyPattern\Ducks\MallardDuck();
        self::assertSame('quack', $mallardDuck->performQuack());
    }

    /**
     * @test
     */
    public function rubberDuckSqueaks()
    {
        $rubberDuck = new \HeadFirst\StrategyPattern\Ducks\RubberDuck();
        self::assertSame('squeak', $rubberDuck->performQuack());
    }

    /**
     * @test
     */
    public function rubberDuckCannotFly()
    {
        $rubberDuck = new \HeadFirst\StrategyPattern\Ducks\RubberDuck();
        self::assertSame(null, $rubberDuck->performFly());
    }

    /**
     * @test
     */
    public function decoyDuckIsSilent()
    {
        $decoyDuck = new \HeadFirst\StrategyPattern\Ducks\DecoyDuck();
        self::assertSame('', $decoyDuck->performQuack());
    }

    /**
     * @test
     */
    public function decoyDuckFliesWhenAttachedToARocket()
    {
        $decoyDuck = new \HeadFirst\StrategyPattern\Ducks\DecoyDuck();
        self::assertSame(null, $decoyDuck->performFly());
        $decoyDuck->setFlyBehavior(new \HeadFirst\StrategyPattern\Behaviors\FlyRocketPowered());
        self::assertSame('wooosh', $decoyDuck->performFly());
    }

    /** @test */
    public function hunterCanMimicDuckQuacks()
    {
        $hunter = new \HeadFirst\StrategyPattern\Hunter();

        $hunter->setDuckCall(new \HeadFirst\StrategyPattern\DuckCalls\Normal());
        self::assertSame('quack', $hunter->performQuack());

        $hunter->setDuckCall(new \HeadFirst\StrategyPattern\DuckCalls\Mute());
        self::assertSame('', $hunter->performQuack());

        $hunter->setDuckCall(new \HeadFirst\StrategyPattern\DuckCalls\Squeak());
        self::assertSame('squeak', $hunter->performQuack());
    }
}
