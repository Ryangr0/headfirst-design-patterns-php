<?php

namespace HeadFirst\DecoratorPattern\Condiments;

use HeadFirst\DecoratorPattern\Beverages\Beverage;

class Whip extends CondimentDecorator
{
    /**
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .35;
    }

    public function description(): string
    {
        return $this->beverage->description() . ", Whip";
    }
}