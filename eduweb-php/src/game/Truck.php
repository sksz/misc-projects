<?php

namespace Eduweb\game;

class Truck extends AbstractVehicle
{
    protected $type = 'Truck';
    protected $maxSpeed = 100;

    public function getName(): string
    {
        return strtolower($this->name);
    }

    protected function beforeMove(): void
    {
        $this->distance += $this->maxSpeed * rand(80, 100) / 100;
    }
}
