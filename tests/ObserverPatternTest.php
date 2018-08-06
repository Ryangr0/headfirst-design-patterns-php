<?php

use PHPUnit\Framework\TestCase;

class ObserverPatternTest extends TestCase
{
    /**
     * @test
     */
    public function itWorks()
    {
        $weatherData = new \HeadFirst\ObserverPattern\WeatherData();
        new \HeadFirst\ObserverPattern\CurrentConditionsDisplay($weatherData);

        $weatherData->setMeasurements(50.62, 6.03, 0.70);

        self::expectOutputString('The temperature is 50.62 degrees');
    }
}
