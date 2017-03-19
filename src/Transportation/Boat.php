<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Plane Ride Class
 */
class Boat implements TransportationInterface
{

    public function ride(Country $depart, Country $arrive)
    {
        return "- boat from " . $depart->getName() . " to " . $arrive->getName();
    }
}
