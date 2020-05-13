<?php

include_once __DIR__ . '/vendor/autoload.php';
use \Eduweb\Car;

$car = new Car();
$car->maker = 'Toyota';
$car->model = 'Corolla';

var_dump($car);

$car->drive();
