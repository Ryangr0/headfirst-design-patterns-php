<?php

namespace HeadFirst\StrategyPattern\Ducks;

use \HeadFirst\StrategyPattern\Behaviors\flyBehavior;
use \HeadFirst\StrategyPattern\Behaviors\quackBehavior;

abstract class Duck
{
    /** @var quackBehavior */
    protected $quackBehavior;
    /** @var flyBehavior */
    protected $flyBehavior;

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function swim()
    {
        echo 'swim';
    }

    public function display()
    {
        echo 'duck';
    }

    /**
     * @param quackBehavior $quackBehavior
     */
    public function setQuackBehavior(
        quackBehavior $quackBehavior
    ): void {
        $this->quackBehavior = $quackBehavior;
    }

    /**
     * @param flyBehavior $flyBehavior
     */
    public function setFlyBehavior(
        flyBehavior $flyBehavior
    ): void {
        $this->flyBehavior = $flyBehavior;
    }
}
