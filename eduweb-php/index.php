<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;
use \Eduweb\Speed;

$speed = new Speed(1.5);

echo $speed->getValue();

$car = new Car('Toyota', 'Corolla');
$car->setSpeed(50.6);

echo "\n" . 'Speed: ' . $car->getSpeed();

