<?php

namespace Eduweb\Game;

interface Vehicle
{
    public function move(): void;

    public function getDistance(): float;

    public function getName(): string;

    public function getType(): string;
}