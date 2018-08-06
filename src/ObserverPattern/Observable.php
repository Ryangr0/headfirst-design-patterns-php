<?php

namespace HeadFirst\ObserverPattern;

abstract class Observable
{
    /** @var \HeadFirst\ObserverPattern\Observer[] */
    private $observers;

    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function deleteObserver(Observer $observer): void
    {
        $i = array_search($observer, $this->observers);
        unset($this->observers[$i]);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}