<?php

namespace Eduweb;

class Car
{
    protected $maker = '';
    protected $model = '';
    protected $speed = 0.0;

    public function __construct(string $maker, string $model)
    {
        $this->maker = $maker;
        $this->model = $model;
    }

    public function setSpeed(float $speed): void
    {
        if($speed < 0) {
            return;
        }

        $this->speed = $speed;
    }

    public function drive(): void
    {
        echo "\nDriving";
    }
}