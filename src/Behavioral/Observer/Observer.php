<?php

class Subject implements SplSubject
{
    private $state;
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeState(): void
    {
        $this->notify();
    }
}

class ObserverA implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo 'ObserverA is reacting to the state change.'.PHP_EOL;
    }
}

class ObserverB implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo 'ObserverB is reacting to the state change.'.PHP_EOL;
    }
}
