<?php namespace ToddlerTravel\Format;


/**
 * Itinerary object contains destinations for a vacation.
 */
class Format
{

    public function countryNames(FormatInterface $object)
    {
        $countryNames = [];

        foreach ($object->countries() as $country)
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
