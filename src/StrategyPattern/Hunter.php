<?php

namespace HeadFirst\StrategyPattern;

use \HeadFirst\StrategyPattern\DuckCalls\DuckCall;
use \HeadFirst\StrategyPattern\DuckCalls\Normal;

class Hunter
{
    /** @var \HeadFirst\StrategyPattern\DuckCalls\DuckCall */
    private $duckCall;

    public function __construct()
    {
        $this->duckCall = new Normal();
    }

    public function setDuckCall(DuckCall $duckCall)
    {
        $this->duckCall = $duckCall;
    }

    public function performQuack()
    {
        return $this->duckCall->performDuckCall();
    }
}