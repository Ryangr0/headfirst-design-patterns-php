<?php

namespace HeadFirst\CommandPattern;

class SimpleRemoteControl
{
    /** @var \HeadFirst\CommandPattern\Command $slot */
    private $slot;

    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonPressed()
     {
        return $this->slot->execute();
    }
}