<?php

namespace HeadFirst\StrategyPattern\Ducks;

use \HeadFirst\StrategyPattern\Behaviors\FlyWithWings;
use \HeadFirst\StrategyPattern\Behaviors\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior   = new FlyWithWings();
    }

    public function display()
    {
        return 'mallard';
    }
}
