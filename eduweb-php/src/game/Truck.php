<?php

namespace Eduweb\Game;

class Truck extends AbstractVehicle
{
    protected $type = 'Truck';

    protected function getName(): string
    {
        return strtolower($this->name);
    }
}