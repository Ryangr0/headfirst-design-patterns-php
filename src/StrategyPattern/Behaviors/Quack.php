<?php

namespace HeadFirst\StrategyPattern\Behaviors;

class Quack implements quackBehavior
{
    public function quack()
    {
        return 'quack';
    }
}