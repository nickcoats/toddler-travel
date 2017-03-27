<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Plane Ride Class
 */
class Car implements TransportationInterface
{

    public function ride(Country $depart, Country $arrive)
    {
        return "Car from " . $depart->getName() . " to " . $arrive->getName();
    }
}
