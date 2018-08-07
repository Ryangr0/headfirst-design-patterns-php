<?php

namespace HeadFirst\SimpleFactoryIdiom;

use HeadFirst\SimpleFactoryIdiom\Pizza\Cheese;
use HeadFirst\SimpleFactoryIdiom\Pizza\Clam;
use HeadFirst\SimpleFactoryIdiom\Pizza\Pepperoni;
use HeadFirst\SimpleFactoryIdiom\Pizza\Pizza;
use HeadFirst\SimpleFactoryIdiom\Pizza\Veggie;

class SimplePizzaFactory
{
    public function createPizza(string $type = 'cheese'): Pizza
    {
        switch ($type) {
            case 'pepperoni':
                $pizza = new Pepperoni;
                break;
            case 'clam':
                $pizza = new Clam;
                break;
            case 'veggie':
                $pizza = new Veggie;
                break;
            default:
                $pizza = new Cheese;
        }

        return $pizza;
    }
}