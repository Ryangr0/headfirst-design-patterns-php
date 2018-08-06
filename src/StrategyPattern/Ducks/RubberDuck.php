<?php

namespace HeadFirst\StrategyPattern\Ducks;

use \HeadFirst\StrategyPattern\Behaviors\FlyNoWay;
use \HeadFirst\StrategyPattern\Behaviors\Squeak;

class RubberDuck extends Duck
{
    public function __construct() {
        $this->quackBehavior = new Squeak();
        $this->flyBehavior   = new FlyNoWay();
    }

    public function display()
    {
        return 'rubber duck';
    }
}
