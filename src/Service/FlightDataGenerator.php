<?php

namespace Service;

interface FlightDataGenerator
{
    public function generateFlightData(int $numberOfPilots, int $numberOfPassengers): array;
}