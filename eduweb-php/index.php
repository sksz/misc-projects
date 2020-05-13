<?php

include_once __DIR__ . '/vendor/autoload.php';
use \Eduweb\Car;

$car = new Car('Toyota', 'Corolla');

var_dump($car);

$car->drive();
