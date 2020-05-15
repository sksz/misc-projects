<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Game\Race;
use \Eduweb\Game\Weather;
use \Eduweb\Game\Car;
use \Eduweb\Game\Bike;

$weather = new Weather();

$race = new Race($weather);
$race->addVehicle(new Car(1));
$race->addVehicle(new Car(2));
$race->addVehicle(new Car(3));
$race->addVehicle(new Bike(4));
$race->run();

