<?php

include_once __DIR__ . '/vendor/autoload.php';
use \Eduweb\Car;

$car = new Car('Toyota', 'Corolla');
$car->setSpeed(50.6);

var_dump($car);

$car->drive();
