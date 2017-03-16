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

    protected $countries = [];

    function __construct(Traveler $traveler, Itinerary $itinerary)
    {
        $this->traveler = $traveler;
        $this->itinerary = $itinerary;
    }

    public function traveler()
    {
        return $this->traveler;
    }

    public function itinerary()
    {
        return $this->itinerary;
    }

    public function addDestination(Country $country)
    {
        $this->countries = $this->itinerary->add($country);
    }

    public function removeDestination(Country $country)
    {
        $this->countries = $this->itinerary->remove($country);
    }

    public function arrangeTransportation()
    {
        $this->itinerary->transportation();
    }

}
