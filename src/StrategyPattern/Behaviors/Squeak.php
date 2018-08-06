<?php

namespace HeadFirst\StrategyPattern\Behaviors;

class Squeak implements quackBehavior
{
    public function quack()
    {
        return 'squeak';
    }
}