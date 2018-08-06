<?php

namespace HeadFirst\StrategyPattern\Behaviors;

class MuteQuack implements quackBehavior
{
    public function quack()
    {
        return '';
    }
}