<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Game\Race;
use \Eduweb\Game\Weather;
use \Eduweb\Game\VehicleBuilder;
use \Eduweb\Game\SportsCar;

$builder = new VehicleBuilder();

$weather = new Weather();

$race = new Race($weather);

$builder->setType(VehicleBuilder::CAR);

$builder->setName('Fiat');
$race->addVehicle($builder->build());

$builder->setName('Bugatti');
$race->addVehicle(new SportsCar($builder->build()));

$builder->setType(VehicleBuilder::TRUCK);

$builder->setName('Man');
$race->addVehicle($builder->build());

$builder->setType(VehicleBuilder::BIKE);

$builder->setName('Yamaha');
$race->addVehicle($builder->build());

$race->run();

