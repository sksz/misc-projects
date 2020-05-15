<?php

namespace Eduweb\Game;

abstract class Vehicle
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move()
    {
        echo "\n ({$this->name}) is moving";
    }
}