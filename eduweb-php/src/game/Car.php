<?php

namespace Eduweb\game;

class Car extends AbstractVehicle
{
    protected $type = 'Car';
    protected $maxSpeed = 180;

    public function getName(): string
    {
        return strtoupper($this->name);
    }

    protected function beforeMove(): void
    {
        $this->distance += $this->maxSpeed * rand(70, 100) / 100;
    }
}
