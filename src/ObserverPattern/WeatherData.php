<?php

namespace HeadFirst\ObserverPattern;

class WeatherData extends Observable
{
    /** @var float */
    private $temperature, $humidity, $pressure;

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(
        float $temperature,
        float $humidity,
        float $pressure
    ): void {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;
        $this->measurementsChanged();
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }
}