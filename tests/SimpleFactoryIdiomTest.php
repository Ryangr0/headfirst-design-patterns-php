<?php

use \PHPUnit\Framework\TestCase;

class SimpleFactoryIdiomTest extends TestCase
{
    /**
     * @test
     */
    public function cheesePizza()
    {
        $pizzaStore = new HeadFirst\SimpleFactoryIdiom\PizzaStore(new \HeadFirst\SimpleFactoryIdiom\SimplePizzaFactory());
        $cheesePizza = $pizzaStore->orderPizza('cheese');
        self::assertInstanceOf(
            Headfirst\SimpleFactoryIdiom\Pizza\Cheese::class,
            $cheesePizza
        );

        $cheesePizza = $pizzaStore->orderPizza();
        self::assertInstanceOf(
            Headfirst\SimpleFactoryIdiom\Pizza\Cheese::class,
            $cheesePizza
        );
    }

    /**
     * @test
     */
    public function clamPizza()
    {
        $pizzaStore = new HeadFirst\SimpleFactoryIdiom\PizzaStore(new \HeadFirst\SimpleFactoryIdiom\SimplePizzaFactory());
        $clamPizza = $pizzaStore->orderPizza('clam');
        self::assertInstanceOf(
            Headfirst\SimpleFactoryIdiom\Pizza\Clam::class,
            $clamPizza
        );
    }
}
