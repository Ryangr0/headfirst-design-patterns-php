<?php

namespace HeadFirst\CommandPattern;

class GarageDoorOpenCommand implements Command
{
    /**
     * @var \HeadFirst\CommandPattern\Garage
     */
    private $garage;

    public function __construct(Garage $garage)
    {
        $this->garage = $garage;
    }

    public function execute()
    {
        return $this->garage->up();
    }
}