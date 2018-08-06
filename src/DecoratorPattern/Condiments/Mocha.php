<?php

namespace HeadFirst\DecoratorPattern\Condiments;

use HeadFirst\DecoratorPattern\Beverages\Beverage;

class Mocha extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function description(): string
    {
        return $this->beverage->description() . ', Mocha';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .20;
    }
}