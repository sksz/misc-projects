<?php

namespace Eduweb;

class Car
{
    protected $maker = '';
    protected $model = '';
    protected $speed;
    protected $color = 'red';

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

    public function __get(string $name)
    {
        if('color' === $name) {
            return $this->color;
        }
        return null;
    }
}
