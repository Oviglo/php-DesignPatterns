<?php

require_once __DIR__.'/Observer.php';

$subject = new Subject();
$observer1 = new ObserverA();
$observer2 = new ObserverB();

$subject->attach($observer1);
$subject->changeState();

$subject->attach($observer2);

$subject->changeState();

$subject->detach($observer1);
$subject->changeState();
