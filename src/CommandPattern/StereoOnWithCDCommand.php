<?php

namespace HeadFirst\CommandPattern;

class StereoOnWithCDCommand implements Command
{
    /**
     * @var \HeadFirst\CommandPattern\Stereo
     */
    private $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }
}