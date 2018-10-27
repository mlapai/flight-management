<?php

namespace Entity;

/**
 * Class Flight
 */
final class Flight implements Startable, Endable
{
    /** @var string $name */
    private $name;

    /** @var int $capacity */
    private $capacity;

    /** @var array $pilots*/
    private $pilots;

    /** @var array $passengers */
    private $passengers;

    /**
     * Flight constructor.
     *
     * @param string      $name
     * @param int         $capacity
     * @param array       $pilots
     * @param Passenger[] ...$passengers
     */
    public function __construct(string $name, int $capacity, array $pilots, Passenger ...$passengers)
    {
        $this->name       = $name;
        $this->capacity   = $capacity;
        $this->pilots     = $pilots;
        $this->passengers = $passengers;
    }

    /**
     * @return string
     */
    public function getName()
    : string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCapacity()
    : int
    {
        return $this->capacity;
    }

    /**
     * @return array
     */
    public function getPilots()
    : array
    {
        return $this->pilots;
    }

    /**
     * @param Pilot $pilot
     *
     * @return bool
     */
    public function addPilot(Pilot $pilot)
    {
        $this->pilots[] = $pilot;

        return true;
    }

    /**
     * @param Pilot $pilot
     *
     * @return bool
     */
    public function removePilot(Pilot $pilot)
    {
        $key = array_search($pilot, $this->pilots, true);
        if ($key === false) {
            return false;
        }
        unset($this->pilots[$key]);
        return true;
    }

    /**
     * @return array
     */
    public function getPassengers()
    : array
    {
        return $this->passengers;
    }

    /**
     * @param Passenger $passenger
     *
     * @return bool
     */
    public function addPassenger(Passenger $passenger)
    {
        $this->passengers[] = $passenger;

        return true;
    }

    /**
     * @param Passenger $passenger
     *
     * @return bool
     */
    public function removePassenger(Passenger $passenger)
    {
        $key = array_search($passenger, $this->passengers, true);
        if ($key === false) {
            return false;
        }
        unset($this->passengers[$key]);
        return true;
    }

    public function start()
    {
        // TODO: Implement start() method.
    }

    public function end()
    {
        // TODO: Implement end() method.
    }
}