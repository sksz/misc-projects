<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;
use \Eduweb\Speed;

$speed = new Speed(1.5);

$car = new Car('Toyota', 'Corolla', $speed);
$car->test('a', 'b', 4);

echo 'Color: ' . $car->getColor() . "\n";
echo 'Speed: ' . $car->getSpeed();
