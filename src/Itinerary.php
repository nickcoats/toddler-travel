<?php namespace ToddlerTravel;

/**
 * Itinerary object contains destinations for a vacation.
 */
class Itinerary
{

    protected $countries = [];

    public function add(Country $country)
    {
        $this->countries[] = $country;
    }

    public function remove(Country $country)
    {
        if (in_array($country, $this->countries))
        {
            unset($this->countries[array_search($country, $this->countries)]);
        }
    }

}
