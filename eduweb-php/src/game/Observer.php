<?php

namespace Eduweb\game;

interface Observer
{
    public function notify(string $event): void;
}
