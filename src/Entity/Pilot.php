<?php

namespace Entity;

/**
 * Class Pilot
 */
final class Pilot extends Person implements Weighable, Licensable
{
    /** @var bool $license */
    private $license;

    /**
     * Pilot constructor.
     *
     * @param string $name
     * @param string $lastName
     * @param int    $weight
     * @param bool   $license
     */
    public function __construct(string $name, string $lastName, int $weight, bool $license)
    {
        parent::__construct($name, $lastName, $weight);
        $this->license = $license;
    }

    /**
     * @return bool
     */
    public function hasLicense()
    : bool
    {
        return $this->license;
    }
}