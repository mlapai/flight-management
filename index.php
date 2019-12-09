<?php

require __DIR__.'/vendor/autoload.php';

use Entity\Flight;
use Service\RandomFlightDataGenerator;

$dataGenerator = new RandomFlightDataGenerator();
$flightData    = $dataGenerator->generateFlightData(2, 10);

// Todo: Data passengers and pilots should be validated here with some service class on their noFly passenger penalty or pilot license
// Todo: Any passenger or pilot violating the constraints should be removed from the flight
// Todo: Validate weight of Luggage

$flight = new Flight('awra', 2000, $flightData['pilots'], ...$flightData['passengers']);

// Todo: Implement start stop
$flight->start();
$flight->end();

// Todo: Log weight of lost Luggage, and Passengers related to them

print_r($flight);
