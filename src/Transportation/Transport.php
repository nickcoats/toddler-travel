<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Arrange Transportation to and from vacation countries
 */
class Transport
{

    public function arrange(Country $depart, Country $arrive, TransportationInterface $travel)
    {
        return $travel->ride($depart, $arrive);
    }
}
