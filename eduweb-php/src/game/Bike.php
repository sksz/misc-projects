<?php

namespace Eduweb\Game;

class Bike extends AbstractVehicle
{
    protected $type = 'Bike';
    protected $maxSpeed = 250;

    public function getName(): string
    {
        return $this->name;
    }

    protected function beforeMove(): void
    {
        $this->distance += $this->maxSpeed * rand(20, 100) / 100;

        $weather = Weather::getInstance();
        if ($weather->isRaining()) {
            $this->distance -= 20;
            echo sprintf("\n Bike %s is slowing down", $this->getName());
        }
    }

}