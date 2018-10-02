<?php

use HeadFirst\CommandPattern\Garage;
use HeadFirst\CommandPattern\GarageDoorOpenCommand;
use HeadFirst\CommandPattern\Light;
use HeadFirst\CommandPattern\LightOnCommand;
use HeadFirst\CommandPattern\SimpleRemoteControl;
use PHPUnit\Framework\TestCase;

class CommandPatternTest extends TestCase
{
    /**
     * @test
     */
    public function lightOn()
    {
        // Client


        // Receiver
        $light               = new Light();
        // Command
        $lightOnCommand      = new LightOnCommand($light);
        // Invoker
        $simpleRemoteControl = new SimpleRemoteControl();

        $simpleRemoteControl->setCommand($lightOnCommand);

        self::assertSame('on', $simpleRemoteControl->buttonPressed());
    }

    /**
     * @test
     */
    public function garageDoorOpen()
    {
        $garage                 = new Garage();
        $garageDoorOpenCommmand = new GarageDoorOpenCommand($garage);

        $simpleRemoteControl = new SimpleRemoteControl();

        $simpleRemoteControl->setCommand($garageDoorOpenCommmand);

        self::assertSame('up', $simpleRemoteControl->buttonPressed());
    }
}
