<?php

namespace Eduweb\Game;

class Bike extends AbstractVehicle
{
    protected $type = 'Bike';

    protected function getName(): string
    {
        return $this->name;
    }
}