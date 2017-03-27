<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Plane Ride Class
 */
class Plane implements TransportationInterface
{

    public function ride(Country $depart, Country $arrive)
    {
        return "Plane from " . $depart->getName() . " to " . $arrive->getName();
    }
}
