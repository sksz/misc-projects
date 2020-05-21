<?php

namespace Eduweb\Game;

abstract class AbstractVehicle implements Vehicle
{
    protected $name;
    protected $type;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move(): void
    {
        echo "\n {$this->getType()} ({$this->getName()}) is moving";
    }

    protected function getType() : string
    {
        return $this->type;
    }

    abstract protected function getName() : string;
}