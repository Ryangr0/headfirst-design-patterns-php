<?php

namespace HeadFirst\ObserverPattern;

class WeatherState
{
    public function __construct(
        float $temperature,
        float $humidity,
        float $pressure
    ) {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;
    }
}