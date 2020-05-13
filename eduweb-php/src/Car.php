<?php

namespace Eduweb;

class Car
{
    protected $maker = '';
    protected $model = '';
    protected $speed;

    public function __construct(string $maker, string $model, Speed $speed)
    {
        $this->maker = $maker;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function slowDown(): Speed
    {
        return $this->getSpeed()->slowDown();
    }

    public function getSpeed(): Speed
    {
        return $this->speed;
    }

    public function drive(): void
    {
        echo "\nDriving";
    }
}
