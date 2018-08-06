<?php

namespace HeadFirst\StrategyPattern\DuckCalls;

class Mute extends DuckCall
{
    public function __construct()
    {
        $this->quackBehavior = new \HeadFirst\StrategyPattern\Behaviors\MuteQuack();
    }
}