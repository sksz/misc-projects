<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;
use \Eduweb\Cab;
use \Eduweb\Speed;

$speed = new Speed(1.5);
$cab = new Cab('Ford', 'Mondeo', $speed);
$car = new Car('Toyota', 'Corolla', $speed);

echo 'Car color: ' . $car->getColor() . "\n";
echo 'Cab color: ' . $cab->getColor() . "\n";
