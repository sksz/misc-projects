<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Game\Race;
use \Eduweb\Game\Weather;
use \Eduweb\Game\VehicleFactory;

$weather = new Weather();

$race = new Race($weather);
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 1));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 2));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 3));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::BIKE, 4));
$race->run();

