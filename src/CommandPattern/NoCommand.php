<?php

namespace HeadFirst\CommandPattern;

class NoCommand implements Command
{
    public function execute()
    {
        return 'nothing to execute';
    }
}