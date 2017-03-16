<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Plane Ride Class
 */
class Car implements Transportation
{

    public function Ride(Country $depart, Country $arrive)
    {
        var_dump("- car from " . $depart->getName() . " to " . $arrive->getName());
    }
}
