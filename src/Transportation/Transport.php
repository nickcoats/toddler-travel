<?php namespace ToddlerTravel\Transportation;

use ToddlerTravel\Country;

/**
 * Arrange Transportation to and from vacation countries
 */
class Transport
{

    public function Arrange(Country $depart, Country $arrive, TransportationInterface $travel)
    {
        var_dump($travel->ride($depart, $arrive));
    }
}
