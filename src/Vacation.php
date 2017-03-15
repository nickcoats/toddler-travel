<?php namespace ToddlerTravel;


/**
 * Vacation object requires a traveler and an itinerary.
 *
 * Params:
 *  - $traveler (Travel Object)
 *  - $intinerary (Intinerary Object)
 *
 */
class Vacation
{

    protected $traveler;
    protected $itinerary;


    function __construct(Traveler $traveler, Itinerary $itinerary)
    {
        $this->traveler = $traveler;
        $this->itinerary = $itinerary;
    }


    public function addDestination(Country $country)
    {
        $this->itinerary->add($country);
    }

    public function removeDestination(Country $country)
    {
        $this->itinerary->remove($country);
    }

}
