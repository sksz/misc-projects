<?php

namespace Eduweb\Game;

abstract class AbstractVehicle implements Vehicle
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move(): void
    {
        echo "\n ({$this->name}) is moving";
    }
}