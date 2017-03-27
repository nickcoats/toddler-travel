<?php namespace ToddlerTravel\Narrative;

use ToddlerTravel\Transportation\Transport;
use ToddlerTravel\Transportation\Car;
use ToddlerTravel\Transportation\Plane;
use ToddlerTravel\Transportation\Train;
use ToddlerTravel\TravelerInterface;

/**
 * Itinerary object contains destinations for a vacation.
 */
class Narrative
{

    public function introduceTraveler(TravelerInterface $person)
    {
        echo "Hi, my name is " . $person->name() . ". I am a " . $person->gender() . ". I am " . $person->age() . " year old.\n";
    }

    public function sayCountries(NarrativeInterface $itinerary)
    {
        $countryNames = [];

        foreach ($itinerary->countries() as $country)
        {
            $countryNames[] = $country->getName();
        }

        $countries = implode(',', $countryNames);

        echo "I am going to " . $countries . ".\n";
    }

    public function sayTravel(NarrativeInterface $itinerary)
    {
        $countries = $itinerary->countries();

        if (sizeOf($countries) > 0)
        {
            if (sizeOf($countries) == 1)
            {
                return "I am only going to 1 country.\n";
            }

            if (sizeOf($countries) > 1)
            {

                echo "I'm traveling by: \n";

                for ($i=0;$i < sizeOf($countries);$i++)
                {
                    if ($countries[$i])
                    {
                        $j = $i + 1;
                        if ($i == (sizeOf($countries) - 1))
                        {
                            $j = 0;
                        }

                        if ($countries[$i]->getContinent() == $countries[$j]->getContinent())
                        {

                            if ($countries[$i]->getContinent() == 'North America')
                            {
                                $transport = new Transport();
                                echo "\t" . $transport->Arrange($countries[$i], $countries[$j], new Car()) . "\n";
                            }

                            if ($countries[$i]->getContinent() == 'Europe')
                            {
                                $transport = new Transport();
                                echo "\t" . $transport->Arrange($countries[$i], $countries[$j], new Train()) . "\n";                        }

                        }

                        if ($countries[$i]->getContinent() != $countries[$j]->getContinent())
                        {
                            $transport = new Transport();
                            echo "\t" . $transport->Arrange($countries[$i], $countries[$j], new Plane()) . "\n";
                        }
                    }
                }
            }
        }
    }

}
