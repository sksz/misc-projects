<?php

namespace Eduweb;

class Cab extends Car
{
    protected $color = 'yellow';

    public function drive(): void
    {
        echo 'Driving cab';
    }
}