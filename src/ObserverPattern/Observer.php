<?php

namespace HeadFirst\ObserverPattern;

interface Observer
{
    public function update(
        Observable $weatherState,
        object $object = null
    ): void;
}