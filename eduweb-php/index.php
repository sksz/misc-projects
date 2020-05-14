<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;
use \Eduweb\Cab;
use \Eduweb\Speed;

$speed = new Speed(1.5);
$cab = new Cab('Ford', 'Mondeo', $speed);
$car = new Car('Toyota', 'Corolla', $speed);

$cab->drive();
$car->drive();

//echo 'Color: ' . $car->getColor() . "\n";
//echo 'Speed: ' . $car->getSpeed();
