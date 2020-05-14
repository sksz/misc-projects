<?php

namespace Eduweb;

class Car
{
    protected $maker = '';
    protected $model = '';
    protected $speed;
    protected $color = 'red';
    protected $attributes = [];

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

    public function getColor(): string
    {
        return $this->color;
    }

    public function __get($name)
    {
        return $this->attributes[$name] ? : null;
    }

    public function __set(string $name, $value): void
    {
        $this->attributes[$name] = $value;
    }
}
