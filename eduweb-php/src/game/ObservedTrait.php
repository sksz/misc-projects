<?php

namespace Eduweb\game;

trait ObservedTrait
{
    /**
     * @var Observer[]
     */
    private $observers = [];

    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }
}
