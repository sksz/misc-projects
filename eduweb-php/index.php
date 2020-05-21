<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Game\Race;
use \Eduweb\Game\Weather;
use \Eduweb\Game\VehicleFactory;

$weather = new Weather();

$race = new Race($weather);
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 'abCD'));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 'cdEF'));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::TRUCK, 'ghi'));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::BIKE, 'zaw4'));
$race->run();

