<?php

namespace Eduweb\Game;

class VehicleBuilder
{
    private $name = '';
    private $type = '';

    const CAR = VehicleFactory::CAR;
    const BIKE = VehicleFactory::BIKE;
    const TRUCK = VehicleFactory::TRUCK;

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function build(): Vehicle
    {
        $vehicle = null;

        switch ($this->type) {
            case self::CAR:
            case self::BIKE:
            case self::TRUCK:
                $vehicle = VehicleFactory::factory($this->type, $this->name);
                break;
            default:
                throw new \Exception('Could not recognise type');

        }

        return $vehicle;
    }
}