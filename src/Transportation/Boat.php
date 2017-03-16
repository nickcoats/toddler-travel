<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Plane Ride Class
 */
class Boat implements Transportation
{

    public function Ride(Country $depart, Country $arrive)
    {
        var_dump("- boat from " . $depart->getName() . " to " . $arrive->getName());
    }
}
