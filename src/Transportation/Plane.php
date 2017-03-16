<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Plane Ride Class
 */
class Plane implements Transportation
{

    public function Ride(Country $depart, Country $arrive)
    {
        var_dump("- plane from " . $depart->getName() . " to " . $arrive->getName());
    }
}
