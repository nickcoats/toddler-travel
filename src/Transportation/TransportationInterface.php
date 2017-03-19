<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

interface TransportationInterface
{
    public function Ride(Country $depart, Country $arrive);
}
