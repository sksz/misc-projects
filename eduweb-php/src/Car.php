<?php

namespace Eduweb;

class Car
{
    protected $maker = '';
    protected $model = '';

    public function __construct(string $maker, string $model)
    {
        $this->maker = $maker;
        $this->model = $model;
    }

    public function drive(): void
    {
        echo "\nDriving";
    }
}