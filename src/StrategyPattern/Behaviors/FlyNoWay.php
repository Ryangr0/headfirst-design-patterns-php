<?php

namespace HeadFirst\StrategyPattern\Behaviors;

class FlyNoWay implements flyBehavior
{
    public function fly()
    {
        return null;
    }
}