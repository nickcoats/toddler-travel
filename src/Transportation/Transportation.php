<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

interface Transportation
{
    public function Ride(Country $depart, Country $arrive);
}
