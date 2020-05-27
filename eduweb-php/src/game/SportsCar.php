<?php

namespace Eduweb\Game;

class SportsCar implements Vehicle
{
    /**
     * @var Car
     */
    private $car;

    public function __construct(Vehicle $car)
    {
        $this->car = $car;
    }

    public function move(): void
    {
        ob_start();
        $this->car->move();
        ob_end_clean();

        echo sprintf("\n I'm moving (%s) - %02.1f", $this->car->getName(), $this->car->getDistance());
    }

    public function notify(string $event): void
    {
        if($event === 'nextTour') {
            $this->move();
        }
    }


    public function getDistance(): float
    {
        return $this->car->getDistance();
    }

    public function getName(): string
    {
        return '__' . $this->car->getName();
    }

    public function getType(): string
    {
        return $this->car->getType();
    }
}