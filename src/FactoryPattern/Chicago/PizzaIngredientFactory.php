<?php

namespace HeadFirst\FactoryPattern\Chicago;

use HeadFirst\FactoryPattern\Ingredients\Cheese;
use HeadFirst\FactoryPattern\Ingredients\Clams;
use HeadFirst\FactoryPattern\Ingredients\Dough;
use HeadFirst\FactoryPattern\Ingredients\Pepperoni;
use HeadFirst\FactoryPattern\Ingredients\Sauce;
use HeadFirst\FactoryPattern\Ingredients\Veggies\BlackOlives;
use HeadFirst\FactoryPattern\Ingredients\Veggies\EggPlant;
use HeadFirst\FactoryPattern\Ingredients\Veggies\Spinach;

class PizzaIngredientFactory implements
    \HeadFirst\FactoryPattern\PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new Dough\ThickCrust();
    }

    public function createSauce(): Sauce
    {
        return new Sauce\PlumTomato();
    }

    public function createCheese(): Cheese
    {
        return new Cheese\Mozzarella();
    }

    public function createVeggies(): array
    {
        return [
            new Spinach(),
            new BlackOlives(),
            new EggPlant(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new Pepperoni\Sliced();
    }

    public function createClams(): Clams
    {
        return new Clams\Frozen();
    }
}