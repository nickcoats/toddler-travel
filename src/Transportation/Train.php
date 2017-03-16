<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Plane Ride Class
 */
class Train implements Transportation
{

    public function Ride(Country $depart, Country $arrive)
    {
        var_dump("- train from " . $depart->getName() . " to " . $arrive->getName());
    }
}
