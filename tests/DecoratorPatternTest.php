<?php

use HeadFirst\DecoratorPattern\Beverages\Beverage;
use \HeadFirst\DecoratorPattern\Beverages\DarkRoast;
use PHPUnit\Framework\TestCase;

class DecoratorPatternTest extends TestCase
{
    /**
     * @test
     */
    public function sanityCheck()
    {
        self::assertInstanceOf(Beverage::class, new DarkRoast());
        self::assertInstanceOf(DarkRoast::class, new DarkRoast());
        self::assertSame('Dark Roast', (new DarkRoast())->description());
    }

    /**
     * @test
     */
    public function decoratingCost()
    {
        $beverage = new DarkRoast();
        $beverage = new \HeadFirst\DecoratorPattern\Condiments\Mocha($beverage);
        $beverage = new \HeadFirst\DecoratorPattern\Condiments\Mocha($beverage);
        $beverage = new \HeadFirst\DecoratorPattern\Condiments\Whip($beverage);

        self::assertSame(2.90 + .20 + .20 + .35,  $beverage->cost());
    }

    /**
     * @test
     */
    public function decoratingDescription()
    {
        $beverage = new DarkRoast();
        self::assertSame('Dark Roast', $beverage->description());
        $beverage = new \HeadFirst\DecoratorPattern\Condiments\Mocha($beverage);
        self::assertSame('Dark Roast, Mocha', $beverage->description());
        $beverage = new \HeadFirst\DecoratorPattern\Condiments\Mocha($beverage);
        self::assertSame('Dark Roast, Mocha, Mocha', $beverage->description());
        $beverage = new \HeadFirst\DecoratorPattern\Condiments\Whip($beverage);
        self::assertSame("Dark Roast, Mocha, Mocha, Whip",  $beverage->description());
    }

    /**
     * @test
     */
    public function tallGrandeVenti()
    {
        $tall = new DarkRoast();
        $tall = new \HeadFirst\DecoratorPattern\Condiments\Soy($tall);
        self::assertSame(2.90 + 0.10, $tall->cost());

        $grande = new DarkRoast();
        $grande->setSize(\HeadFirst\DecoratorPattern\Size::GRANDE);
        $grande = new \HeadFirst\DecoratorPattern\Condiments\Soy($grande);
        self::assertSame(2.90 + 0.15, $grande->cost());

        $venti = new DarkRoast();
        $venti->setSize(\HeadFirst\DecoratorPattern\Size::VENTI);
        $venti = new \HeadFirst\DecoratorPattern\Condiments\Soy($venti);
        self::assertSame(2.90 + 0.20, $venti->cost());
    }
}
