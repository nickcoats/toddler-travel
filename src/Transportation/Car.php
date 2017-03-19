<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Plane Ride Class
 */
class Car implements TransportationInterface
{

    public function ride(Country $depart, Country $arrive)
    {
        return "- car from " . $depart->getName() . " to " . $arrive->getName();
    }
}
