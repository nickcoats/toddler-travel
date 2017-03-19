<?php namespace ToddlerTravel;

use ToddlerTravel\Format\Format;
use ToddlerTravel\Format\FormatInterface;

/**
 * Itinerary object contains destinations for a vacation.
 */
class Itinerary implements FormatInterface
{

    protected $countries = [];

    public function countries()
    {
        $this->finalizeDestinations();

        return $this->countries;
    }

    public function add(Country $country)
    {
        $this->countries[] = $country;

        return $this->countries;
    }

    public function remove(Country $country)
    {
        if (in_array($country, $this->countries))
        {
            unset($this->countries[array_search($country, $this->countries)]);
        }

        return $this->countries;
    }

    public function finalizeDestinations()
    {
        $finalDestinations = [];

        foreach ($this->countries as $country)
        {
            if ($country)
            {
                $finalizeDestinations[] = $country;
            }
        }

        $this->countries = $finalizeDestinations;
    }

}
