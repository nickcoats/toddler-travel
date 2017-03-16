<?php namespace ToddlerTravel;


/**
 * Itinerary object contains destinations for a vacation.
 */
class Format extends Vacation
{

    public function __construct(Traveler $traveler, Itinerary $itinerary) {
        parent::__construct($traveler, $itinerary);
    }


    public function countryNames()
    {
        $countryNames = [];

        foreach ($this->itinerary->countries() as $country)
        {
            if ($country)
            {
                $countryNames[] = $country->getName();
            }
        }

        $response = implode(',', $countryNames);

        return $response;
    }

}
