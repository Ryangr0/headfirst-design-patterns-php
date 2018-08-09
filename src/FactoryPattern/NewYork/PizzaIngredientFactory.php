<?php

namespace HeadFirst\FactoryPattern\NewYork;

use HeadFirst\FactoryPattern\Ingredients\Cheese;
use HeadFirst\FactoryPattern\Ingredients\Clams;
use HeadFirst\FactoryPattern\Ingredients\Dough;
use HeadFirst\FactoryPattern\Ingredients\Pepperoni;
use HeadFirst\FactoryPattern\Ingredients\Sauce;
use HeadFirst\FactoryPattern\Ingredients\Veggies\Garlic;
use HeadFirst\FactoryPattern\Ingredients\Veggies\Mushroom;
use HeadFirst\FactoryPattern\Ingredients\Veggies\Onion;
use HeadFirst\FactoryPattern\Ingredients\Veggies\RedPepper;

class PizzaIngredientFactory implements
    \HeadFirst\FactoryPattern\PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new Dough\ThinCrust();
    }

    public function createSauce(): Sauce
    {
        return new Sauce\Marinara();
    }

    public function createCheese(): Cheese
    {
        return new Cheese\Reggiano();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new Pepperoni\Sliced();
    }

    public function createClams(): Clams
    {
        return new Clams\Fresh();
    }
}