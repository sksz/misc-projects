<?php

namespace Eduweb\game;

interface Vehicle
{
    public function move(): void;

    public function getDistance(): float;

    public function getName(): string;

    public function getType(): string;
}
