<?php

namespace HeadFirst\CommandPattern;

class RemoteControl
{
    /**
     * @var \HeadFirst\CommandPattern\Command[]
     */
    private $onCommands;

    /**
     * @var \HeadFirst\CommandPattern\Command[]
     */
    private $offCommands;

    public function __construct()
    {
        for ($i = 0; $i < 7; $i) {
            $this->onCommands[$i]  = new NoCommand();
            $this->offCommands[$i] = new NoCommand();
        }
    }

    public function setCommand($slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPressed($slot)
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPressed($slot)
    {
        $this->offCommands[$slot]->execute();
    }
}