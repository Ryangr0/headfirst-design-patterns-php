<?php

namespace HeadFirst\DecoratorPattern\Condiments;

use HeadFirst\DecoratorPattern\Beverages\Beverage;

abstract class CondimentDecorator extends Beverage
{
    /** @var Beverage */
    protected $beverage;
}