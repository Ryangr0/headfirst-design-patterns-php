<?php

use \PHPUnit\Framework\TestCase;

use \HeadFirst\FactoryPattern\Ingredients;

class FactoryPatternTest extends TestCase
{
    /**
     * @test
     */
    public function newYorkIngredientFactoryTest()
    {
        $factory = new \HeadFirst\FactoryPattern\NewYork\PizzaIngredientFactory();

        self::assertInstanceOf(
            Ingredients\Dough\ThinCrust::class,
            $factory->createDough()
        );

        self::assertInstanceOf(
            Ingredients\Sauce\Marinara::class,
            $factory->createSauce()
        );

        self::assertInstanceOf(
            Ingredients\Cheese\Reggiano::class,
            $factory->createCheese()
        );

        self::assertContainsOnlyInstancesOf(
            Ingredients\Veggie::class,
            $factory->createVeggies()
        );

        self::assertInstanceOf(
            Ingredients\Pepperoni\Sliced::class,
            $factory->createPepperoni()
        );

        self::assertInstanceOf(
            Ingredients\Clams\Fresh::class,
            $factory->createClams()
        );
    }

    /**
     * @test
     */
    public function chicagoIngredientFactoryTest()
    {
        $factory = new \HeadFirst\FactoryPattern\Chicago\PizzaIngredientFactory();

        self::assertInstanceOf(
            Ingredients\Dough\ThickCrust::class,
            $factory->createDough()
        );

        self::assertInstanceOf(
            Ingredients\Sauce\PlumTomato::class,
            $factory->createSauce()
        );

        self::assertInstanceOf(
            Ingredients\Cheese\Mozzarella::class,
            $factory->createCheese()
        );

        self::assertContainsOnlyInstancesOf(
            Ingredients\Veggie::class,
            $factory->createVeggies()
        );

        self::assertInstanceOf(
            Ingredients\Pepperoni\Sliced::class,
            $factory->createPepperoni()
        );

        self::assertInstanceOf(
            Ingredients\Clams\Frozen::class,
            $factory->createClams()
        );
    }

    /**
     * @test
     */
    public function newYorkCheesePizza()
    {
        $store = new \HeadFirst\FactoryPattern\NewYork\PizzaStore();
        $pizza = $store->orderPizza();

        self::assertInstanceOf(
            Ingredients\Dough\ThinCrust::class,
            $pizza->dough()
        );

        self::assertInstanceOf(
            Ingredients\Sauce\Marinara::class,
            $pizza->sauce()
        );

        self::assertInstanceOf(
            Ingredients\Cheese\Reggiano::class,
            $pizza->cheese()
        );
    }

    /**
     * @test
     */
    public function chicagoClamPizza()
    {
        $store = new \HeadFirst\FactoryPattern\Chicago\PizzaStore();
        $pizza = $store->orderPizza('clam');

        self::assertInstanceOf(
            Ingredients\Dough\ThickCrust::class,
            $pizza->dough()
        );

        self::assertInstanceOf(
            Ingredients\Sauce\PlumTomato::class,
            $pizza->sauce()
        );

        self::assertInstanceOf(
            Ingredients\Cheese\Mozzarella::class,
            $pizza->cheese()
        );

        self::assertInstanceOf(
            Ingredients\Clams\Frozen::class,
            $pizza->clams()
        );
    }
}
