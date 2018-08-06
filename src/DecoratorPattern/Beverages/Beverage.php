<?php

namespace HeadFirst\DecoratorPattern\Beverages;

use HeadFirst\DecoratorPattern\Size;

abstract class Beverage
{
    protected $description = 'Unknown Beverage';
    private   $size        = Size::TALL;

    public function description(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;

    public function size(): int
    {
        return $this->size;
    }

    public function setSize(int $size)
    {
        $this->size = $size;
    }
}