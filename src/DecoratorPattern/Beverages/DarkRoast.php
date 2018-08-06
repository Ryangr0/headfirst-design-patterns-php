<?php

namespace HeadFirst\DecoratorPattern\Beverages;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast';
    }

    public function cost(): float
    {
        return 2.90;
    }
}