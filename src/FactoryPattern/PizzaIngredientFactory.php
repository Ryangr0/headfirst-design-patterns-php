<?php

namespace HeadFirst\FactoryPattern;

use HeadFirst\FactoryPattern\Ingredients\Cheese;
use HeadFirst\FactoryPattern\Ingredients\Clams;
use HeadFirst\FactoryPattern\Ingredients\Dough;
use HeadFirst\FactoryPattern\Ingredients\Pepperoni;
use HeadFirst\FactoryPattern\Ingredients\Sauce;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;
    public function createSauce(): Sauce;
    public function createCheese(): Cheese;
    public function createVeggies(): array;
    public function createPepperoni(): Pepperoni;
    public function createClams(): Clams;
}