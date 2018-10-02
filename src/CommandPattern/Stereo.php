<?php

namespace HeadFirst\CommandPattern;

class Stereo
{
    public function on()
    {
        return 'on';
    }

    public function off()
    {
        return 'off';
    }

    public function setCd()
    {
        return 'setCd';
    }

    public function setDvd()
    {
        return 'setDvd';
    }

    public function setRadio()
    {
        return 'setRadio';
    }


    public function setVolume($volume)
    {
        return 'setVolume to: ' . $volume;
    }

}