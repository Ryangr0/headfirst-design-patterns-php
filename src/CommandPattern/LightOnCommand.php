<?php

namespace HeadFirst\CommandPattern;

class LightOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        return $this->light->on();
    }
}