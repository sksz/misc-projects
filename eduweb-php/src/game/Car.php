<?php

namespace Eduweb\Game;

class Car extends AbstractVehicle
{
    protected $type = 'Car';

    protected function getName(): string
    {
        return strtoupper($this->name);
    }
}