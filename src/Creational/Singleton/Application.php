<?php

// Application of the Singleton pattern

require_once __DIR__.'/Singleton.php';

$singleton = Singleton::getInstance();
$singleton->doSomething();

$singleton2 = Singleton::getInstance();
$singleton2->doSomething();

if ($singleton === $singleton2) {
    echo 'Singleton works, both variables contain the same instance.';
} else {
    echo 'Singleton failed, variables contain different instances.';
}

// $makeError = new Singleton(); // Fatal error: Uncaught Error: Call to private Singleton::__construct() from invalid context
