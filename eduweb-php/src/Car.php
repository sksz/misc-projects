<?php

namespace Eduweb;

class Car
{
    public $maker = '';
    public $model = '';

    public function drive(): void
    {
        echo "\nDriving";
    }
}