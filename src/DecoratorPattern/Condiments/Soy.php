<?php

namespace HeadFirst\DecoratorPattern\Condiments;

use HeadFirst\DecoratorPattern\Beverages\Beverage;
use HeadFirst\DecoratorPattern\Size;

class Soy extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function description(): string
    {
        return $this->beverage->description() . ', Soy';
    }

    public function cost(): float
    {
        $cost = $this->beverage->cost();

        switch ($this->beverage->size()) {
            case Size::TALL:
                $cost += 0.10;
                break;
            case Size::GRANDE:
                $cost += 0.15;
                break;
            case Size::VENTI:
                $cost += 0.20;
                break;
        }

        return $cost;
    }
}