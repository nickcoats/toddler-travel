<?php namespace ToddlerTravel;

use ToddlerTravel\Transportation\Car;
use ToddlerTravel\Transportation\Plane;
use ToddlerTravel\Transportation\Train;

/**
 * Itinerary object contains destinations for a vacation.
 */
class Itinerary
{

    protected $countries = [];

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

    public function countries()
    {
        $this->finalizeDestinations();

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

    public function transportation()
    {

        $this->finalizeDestinations();

        if (sizeOf($this->countries) > 1)
        {
            for ($i=0;$i < sizeOf($this->countries);$i++)
            {
                if ($this->countries[$i])
                {
                    $j = $i + 1;
                    if ($i == (sizeOf($this->countries) - 1))
                    {
                        $j = 0;
                    }

                    if ($this->countries[$i]->getContinent() == $this->countries[$j]->getContinent())
                    {

                        if ($this->countries[$i]->getContinent() == 'North America')
                        {
                            $transport = new Car();
                            $transport->ride($this->countries[$i], $this->countries[$j]);
                        }

                        if ($this->countries[$i]->getContinent() == 'Europe')
                        {
                            $transport = new Train();
                            $transport->ride($this->countries[$i], $this->countries[$j]);
                        }

                    }

                    if ($this->countries[$i]->getContinent() != $this->countries[$j]->getContinent())
                    {
                        $transport = new Plane();
                        $transport->ride($this->countries[$i], $this->countries[$j]);
                    }
                }
            }

            return;
        }
    }

}
