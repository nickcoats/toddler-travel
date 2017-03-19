<?php

require 'vendor/autoload.php';

use ToddlerTravel\Traveler;
use ToddlerTravel\Country;
use ToddlerTravel\Itinerary;
use ToddlerTravel\Format\Format;
use ToddlerTravel\Fortmat\FormatInterface;
use ToddlerTravel\Transportation\Transport;
use ToddlerTravel\Transportation\Car;
use ToddlerTravel\Transportation\Plane;
use ToddlerTravel\Transportation\Train;



// Create Traveler Object
$mila = new Traveler('Mila');
$mila->setOrientation('girl');
$mila->setAge(1);

var_dump($mila->introduction());



// Create Itinerary Object
$itinerary = new Itinerary();


// Create Countries to Add to Itinerary
$usa = new Country('United States');
$usa->setLanguage('English');
$usa->setContinent('North America');
$usa->setPopulation(370);
$usa->setContinent('North America');

$canada = new Country('Canada');
$canada->setLanguage('English');
$canada->setContinent('North America');
$canada->setPopulation(35);
$canada->setContinent('North America');

$germany = new Country('Germany');
$germany->setLanguage('German');
$germany->setContinent('Europe');
$germany->setPopulation(180);
$germany->setContinent('Europe');

$france = new Country('France');
$france->setLanguage('French');
$france->setContinent('Europe');
$france->setPopulation(160);
$france->setContinent('Europe');

$japan = new Country('Japan');
$japan->setLanguage('Japanese');
$japan->setContinent('Asia');
$japan->setPopulation(220);
$japan->setContinent('Asia');


// Add Countries to itinerary object
$itinerary->add($usa);
$itinerary->add($canada);
$itinerary->add($germany);
$itinerary->add($france);
$itinerary->add($japan);



// Print out some vacation details
$narrative = new Format();
var_dump('I\'m going to ' . $narrative->countryNames($itinerary) . '.');


// Arrange Transportation Based on Where Mila is Going
$countries = $itinerary->countries();

if (sizeOf($countries) > 0)
{
    if (sizeOf($countries) == 1)
    {
        var_dump('I am only going to 1 country.');
    }

    if (sizeOf($countries) > 1)
    {

        var_dump('I\'m traveling by:');

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
                        $transport->Arrange($countries[$i], $countries[$j], new Car());
                    }

                    if ($countries[$i]->getContinent() == 'Europe')
                    {
                        $transport = new Transport();
                        $transport->Arrange($countries[$i], $countries[$j], new Train());                        }

                }

                if ($countries[$i]->getContinent() != $countries[$j]->getContinent())
                {
                    $transport = new Transport();
                    $transport->Arrange($countries[$i], $countries[$j], new Plane());
                }
            }
        }
    }
}


var_dump('It will be a lot of fun!');
