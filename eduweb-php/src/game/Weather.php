<?php

namespace Eduweb\Game;

class Weather
{
    private $current = 'Sunny';

    public function  __toString(): string
    {
        return "Current weather: {$this->current}";
    }
}