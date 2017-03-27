<?php namespace ToddlerTravel;

use ToddlerTravel\Country;
use ToddlerTravel\Narrative\Narrative;
use ToddlerTravel\Narrative\NarrativeInterface;

/**
 * Itinerary object contains destinations for a vacation.
 */
class Itinerary implements NarrativeInterface
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

    public function addCountries($countries)
    {
        foreach ($countries as $country)
        {
            $destination = new Country($country->name);
            $destination->setID($country->id);
            $destination->setLanguage($country->language);
            $destination->setCapital($country->capital);
            $destination->setPopulation($country->population);
            $destination->setContinent($country->continent);

            $this->add($destination);
        }
    }

}
