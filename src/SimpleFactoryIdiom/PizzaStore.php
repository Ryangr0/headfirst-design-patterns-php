<?php

namespace HeadFirst\SimpleFactoryIdiom;

use HeadFirst\SimpleFactoryIdiom\Pizza\Pizza;

class PizzaStore
{
    private $pizzaFactory;

    public function __construct(SimplePizzaFactory $pizzaFactory)
    {
        $this->pizzaFactory = $pizzaFactory;
    }

    public function orderPizza(string $type = 'cheese'): Pizza
    {
        $pizza = $this->pizzaFactory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}