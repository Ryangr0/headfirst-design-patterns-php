<?php

namespace HeadFirst\FactoryPattern;

use HeadFirst\FactoryPattern\Pizza\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type = 'cheese'): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    protected abstract function createPizza(string $type): Pizza;
}