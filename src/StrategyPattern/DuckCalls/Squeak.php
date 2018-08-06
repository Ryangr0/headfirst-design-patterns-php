<?php

namespace HeadFirst\StrategyPattern\DuckCalls;

class Squeak extends DuckCall
{
    public function __construct()
    {
        $this->quackBehavior = new \HeadFirst\StrategyPattern\Behaviors\Squeak();
    }
}