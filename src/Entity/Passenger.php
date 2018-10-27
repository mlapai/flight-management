<?php

namespace Entity;

/**
 * Class Passenger
 */
final class Passenger extends Person implements Weighable
{
    /** @var bool $noFly */
    private $noFly;

    /** @var Luggage $luggage */
    private $luggage;

    /**
     * Passenger constructor.
     *
     * @param string  $name
     * @param string  $lastName
     * @param int     $weight
     * @param bool    $noFly
     * @param Luggage $luggage
     */
    public function __construct(string $name, string $lastName, int $weight, bool $noFly, Luggage $luggage)
    {
        parent::__construct($name, $lastName, $weight);
        $this->noFly   = $noFly;
        $this->luggage = $luggage;
    }

    /**
     * @return bool
     */
    public function hasNoFly()
    : bool
    {
        return $this->noFly;
    }

    /**
     * @return Luggage
     */
    public function getLuggage()
    : Luggage
    {
        return $this->luggage;
    }
}