<?php

namespace HeadFirst\StrategyPattern\Behaviors;

class FlyRocketPowered implements flyBehavior
{
    public function fly()
    {
        return 'wooosh';
    }
}