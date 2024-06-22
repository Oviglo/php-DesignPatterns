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
            // echo 'Creating new instance.'.PHP_EOL;
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function doSomething()
    {
        // The singleton class can define some business logic, which can be executed on its instance.
    }
}
