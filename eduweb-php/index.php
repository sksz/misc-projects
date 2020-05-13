<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;
use \Eduweb\Speed;

$speed = new Speed(1.5);
echo $speed->getValue() . "\n";

$car = new Car('Toyota', 'Corolla', $speed);
echo 'Color: ' . $car->color . "\n" ;
echo 'Speed: ' . $car->getSpeed();
