<?php


namespace Entity;


/**
 * Interface Licensable
 *
 * @package Entity
 */
interface Licensable
{
    /**
     * @return bool
     */
    public function hasLicense(): bool;
}