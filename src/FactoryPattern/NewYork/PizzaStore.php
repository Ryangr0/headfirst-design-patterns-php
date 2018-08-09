<?php

namespace HeadFirst\FactoryPattern\NewYork;

use HeadFirst\FactoryPattern\Pizza\Cheese;
use HeadFirst\FactoryPattern\Pizza\Clam;
use HeadFirst\FactoryPattern\Pizza\Pizza;

class PizzaStore extends \HeadFirst\FactoryPattern\PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $ingredientFactory = new PizzaIngredientFactory();
        switch ($type) {
            case 'clam':
                $pizza = new Clam($ingredientFactory);
                $pizza->setName('New York Style Clam Pizza');
                break;
            default:
                $pizza = new Cheese($ingredientFactory);
                $pizza->setName('New York Style Cheese Pizza');
        }

        return $pizza;
    }
}