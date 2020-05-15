<?php

namespace Eduweb\Game;

class Race
{
    private $distance = 0;
    private $maxTours = 5;
    private $weather;
    private $vehicles = [];

    public function __construct(Weather $weather, float $distance = 5)
    {
        $this->weather = $weather;
        $this->distance = $distance;
    }

    public function addVehicle($vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function run(): void
    {
        $this->displayInfo();

        foreach (range(1, $this->maxTours) as $tour) {
            $this->tour($tour);
        }
    }

    private function tour(int $tour)
    {
        $this->displayTourInfo($tour);
        foreach ($this->vehicles as $vehicle) {
            $vehicle->move();
        }
    }

    private function displayInfo(): void
    {
        echo "\n Distance:\t {$this->distance}";
        echo sprintf("\n Vehicles:\t %s", count($this->vehicles));
    }

    private function displayTourInfo(int $tour): void
    {
        echo "\n Tour {$tour}: start";
        echo "\n {$this->weather}";
    }
}