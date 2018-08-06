<?php

namespace HeadFirst\StrategyPattern\Behaviors;

class FlyWithWings implements flyBehavior
{
    public function fly()
    {
        return 'fly';
    }
}