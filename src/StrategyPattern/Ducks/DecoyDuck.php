<?php

namespace HeadFirst\StrategyPattern\Ducks;

use \HeadFirst\StrategyPattern\Behaviors\FlyNoWay;
use \HeadFirst\StrategyPattern\Behaviors\MuteQuack;

class DecoyDuck extends Duck
{
    public function __construct() {
        $this->quackBehavior = new MuteQuack();
        $this->flyBehavior   = new FlyNoWay();
    }

    public function display()
    {
        return 'decoy duck';
    }
}
