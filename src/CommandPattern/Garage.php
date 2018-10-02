<?php

namespace HeadFirst\CommandPattern;

class Garage
{
    public function up()
    {
        return 'up';
    }

    public function close()
    {
        return 'close';
    }

    public function stop()
    {
        return 'stop';
    }

    public function lightOn()
    {
        return 'on';
    }

    public function off()
    {
        return 'off';
    }
}