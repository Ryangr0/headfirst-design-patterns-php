<?php

namespace HeadFirst\FactoryPattern\Pizza;

use HeadFirst\FactoryPattern\PizzaIngredientFactory;

class Clam extends Pizza
{
    private $ingredientFactory = null;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        $this->dough  = $this->ingredientFactory->createDough();
        $this->sauce  = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clams  = $this->ingredientFactory->createClams();
    }
}