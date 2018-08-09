<?php

namespace HeadFirst\SingletonPattern;

class Singleton
{
    private static $uniqueInstance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (null === self::$uniqueInstance) {
            self::$uniqueInstance = new self();
        }

        return self::$uniqueInstance;
    }
}