<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Game\Race;
use \Eduweb\Game\Weather;
use \Eduweb\Game\VehicleBuilder;
use \Eduweb\Game\SportsCar;

$b = new DI\ContainerBuilder();
$b->addDefinitions(
    [
        'VB' => DI\create(VehicleBuilder::class),
        'Weather' => DI\factory(
            [
                Weather::class,
                'getInstance'
            ]
        ),
        'Race' => DI\create(Race::class)->constructor(DI\get('Weather'))
    ]
);
$container = $b->build();

$builder = $container->get('VB');
$race = $container->get('Race');

$builder->setType(VehicleBuilder::CAR);
$builder->setName('Bugatti');

$race->addVehicle(new SportsCar($builder->build()));

$builder->setName('Fiat');

$race->addVehicle($builder->build());

$builder->setType(VehicleBuilder::TRUCK);
$builder->setName('Man');

$race->addVehicle($builder->build());

$builder->setType(VehicleBuilder::BIKE);
$builder->setName('Yamaha');

$race->addVehicle($builder->build());
$race->run();
