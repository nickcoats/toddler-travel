<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Plane Ride Class
 */
class Train implements TransportationInterface
{

    public function ride(Country $depart, Country $arrive)
    {
        return "Train from " . $depart->getName() . " to " . $arrive->getName();
    }
}
