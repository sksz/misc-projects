<?php

namespace Eduweb\game;

abstract class AbstractVehicle implements Vehicle, Observer
{
    protected $name;
    protected $type;
    protected $distance = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getDistance(): float
    {
        return $this->distance;
    }

    public function move(): void
    {
        $this->beforeMove();

        echo "\n {$this->getType()} ({$this->getName()}) is moving by {$this->distance}";

        $this->afterMove();
    }

    public function notify(string $event): void
    {
        if($event === 'nextTour') {
            $this->move();
        }
    }

    public function getType(): string
    {
        return $this->type;
    }

    protected function beforeMove(): void
    {
    }

    protected function afterMove(): void
    {
    }

    abstract public function getName(): string;

}