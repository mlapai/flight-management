<?php

namespace Service;

use Entity\Passenger;
use Entity\Luggage;
use Entity\Pilot;

/**
 * Class RandomFlightDataFlightDataGenerator
 *
 * @package Service
 */
final class RandomFlightDataGenerator implements FlightDataGenerator
{
    const NAMES = array(
        'Boris',
        'Waylon',
        'Nicky',
        'Bill',
        'Grant',
        'Everett',
        'Colin',
        'Jose',
        'Marcelino',
        'Drew',
        'Barton',
        'Adrian',
        'Sergio',
        'Brendon',
        'Ross',
        'Brian',
        'Bart',
        'Kermit',
        'Lawrence',
        'Wiley',
    );

    const LAST_NAMES = array(
        'Partridge',
        'Ashcraft',
        'Kilmon',
        'Sheckler',
        'Samaniego',
        'Anchondo',
        'Demar',
        'Janson',
        'Tingler',
        'Merck',
        'Fulp',
        'Stalcup',
        'Tickle',
        'Beier',
        'Bank',
        'Tasker',
        'Pelton',
        'Marshall',
        'Mcgoldrick',
        'Cacho',
    );

    /**
     * @param int $numberOfPilots
     * @param int $numberOfPassengers
     *
     * @return array
     */
    public function generateFlightData(int $numberOfPilots, int $numberOfPassengers)
    : array
    {
        $pilots     = $this->generatePilots($numberOfPilots);
        $passengers = $this->generatePassengers($numberOfPassengers);

        return array(
            'pilots'     => $pilots,
            'passengers' => $passengers,
        );
    }

    private function generatePilots(int $numberOfPilots)
    {
        $pilots = array();

        // generate 2 pilots
        for ($i = 1; $i <= $numberOfPilots; $i++) {
            // 5% for pilot to be without license
            $license  = (rand(1, 100) <= 5)
                ? false
                : true;
            $pilot    = new Pilot($this->randomName(), $this->randomLastName(), rand(20, 100), $license);
            $pilots[] = $pilot;
        }

        return $pilots;
    }

    private function generatePassengers(int $numberOfPassengers)
    {
        $passengers = array();

        // generate 10 passengers
        for ($i = 1; $i <= $numberOfPassengers; $i++) {
            $luggage = new Luggage(rand(1, 5));
            // 30% for passenger to be with noFly penalty
            $noFly        = (rand(1, 100) <= 30)
                ? true
                : false;
            $passenger    = new Passenger(
                $this->randomName(), $this->randomLastName(), rand(20, 100), $noFly, $luggage
            );
            $passengers[] = $passenger;
        }

        return $passengers;
    }

    private function randomName()
    {
        return self::NAMES[rand(0, count(self::NAMES) - 1)];
    }

    private function randomLastName()
    {
        return self::LAST_NAMES[rand(0, count(self::LAST_NAMES) - 1)];
    }
}