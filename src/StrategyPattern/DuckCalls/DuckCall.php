<?php

namespace HeadFirst\StrategyPattern\DuckCalls;

abstract class DuckCall
{
    /** @var \HeadFirst\StrategyPattern\Behaviors\quackBehavior */
    protected $quackBehavior;

    public function performDuckCall() : string
    {
        return $this->quackBehavior->quack();
    }
}