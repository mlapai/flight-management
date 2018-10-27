<?php


namespace Entity;


/**
 * Class Luggage
 *
 * @package Entity
 */
final class Luggage implements Weighable
{
    /** @var int $weight */
    private $weight;

    /** @var bool $handLuggage */
    private $handLuggage = false;

    /**
     * Luggage constructor.
     *
     * @param int $weight
     */
    public function __construct(int $weight)
    {
        $this->weight = $weight;
        // if luggage weight is less that 2, its hand luggage
        if ($weight < 2)
        {
            $this->handLuggage = true;
        }
    }

    /**
     * @return int
     */
    public function getWeight()
    : int
    {
        return $this->weight;
    }

    /**
     * @return bool
     */
    public function isHandLuggage()
    : bool
    {
        return $this->handLuggage;
    }
}