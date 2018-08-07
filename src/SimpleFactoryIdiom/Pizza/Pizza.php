<?php

namespace HeadFirst\SimpleFactoryIdiom\Pizza;

abstract class Pizza
{
    private $prepared = false;
    private $baked    = false;
    private $cut      = false;
    private $boxed    = false;

    public function prepare()
    {
        $this->prepared = true;
    }

    public function bake()
    {
        $this->baked = true;
    }

    public function cut()
    {
        $this->cut = true;
    }

    public function box()
    {
        $this->boxed = true;
    }
}