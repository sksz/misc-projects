<?php

namespace Eduweb\Game;

abstract class AbstractVehicle implements Vehicle
{
    protected $name;
    protected $type;
    protected $distance = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move(): void
    {
        $this->beforeMove();

        echo "\n {$this->getType()} ({$this->getName()}) is moving by {$this->distance}";

        $this->afterMove();
    }

    protected function getType(): string
    {
        return $this->type;
    }

    protected function beforeMove(): void
    {
    }

    protected function afterMove(): void
    {
    }

    abstract protected function getName(): string;

}