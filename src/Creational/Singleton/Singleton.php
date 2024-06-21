<?php

class Singleton
{
    private static $instance;

    private function __construct()
    {
        // The constructor is private to prevent initiation with outer code.
    }

    public static function getInstance(): Singleton
    {
        if (null === self::$instance) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    private function __clone()
    {
        // The clone magic method is private to prevent cloning of the instance.
    }

    private function __wakeup()
    {
        // The wakeup magic method is private to prevent unserializing of the instance.
    }
}
