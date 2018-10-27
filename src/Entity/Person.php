<?php

namespace Entity;

/**
 * Class Person
 */
abstract class Person implements Weighable
{
    /** @var string $name */
    private $name;

    /** @var string $lastName */
    private $lastName;

    /** @var int $weight */
    private $weight;

    /**
     * Person constructor.
     *
     * @param string $name
     * @param string $lastName
     * @param int    $weight
     */
    public function __construct(string $name, string $lastName, int $weight)
    {
        $this->name     = $name;
        $this->lastName = $lastName;
        $this->weight   = $weight;
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
     * @return string
     */
    public function getLastName()
    : string
    {
        return $this->lastName;
    }

    /**
     * @return int
     */
    public function getWeight()
    : int
    {
        return $this->weight;
    }
}