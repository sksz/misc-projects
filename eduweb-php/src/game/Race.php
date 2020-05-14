<?php

namespace Eduweb\Game;

class Race
{
    private $distance = 0;

    public function __construct(float $distance = 5)
    {
        $this->distance = $distance;
    }

    public function run(): void
    {
        $this->displayInfo();
    }

    private function displayInfo(): void
    {
        echo "\n Distance:\t $this->distance";
    }
}