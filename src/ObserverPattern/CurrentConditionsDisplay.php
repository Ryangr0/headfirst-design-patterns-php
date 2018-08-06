<?php

namespace HeadFirst\ObserverPattern;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /** @var float */
    private $temperature, $humidity;
    /** @var \HeadFirst\ObserverPattern\Observable */
    private $observable;

    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $this->observable->addObserver($this);
    }

    public function update(Observable $observable, object $object = null): void
    {
        if ($observable instanceof WeatherData) {
            $weatherData       = $observable;
            $this->temperature = $weatherData->getTemperature();
            $this->humidity    = $weatherData->getHumidity();
            $this->display();
        }
    }

    public function display(): void
    {
        echo 'The temperature is ' . $this->temperature . ' degrees';
    }
}