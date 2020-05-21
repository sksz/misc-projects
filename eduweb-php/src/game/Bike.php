<?php

namespace Eduweb\Game;

class Bike extends AbstractVehicle
{
    protected $type = 'Bike';
    protected $maxSpeed = 250;

    protected function getName(): string
    {
        return $this->name;
    }

    protected function beforeMove(): void
    {
        $this->distance += $this->maxSpeed * rand(20, 100) / 100;
    }

}