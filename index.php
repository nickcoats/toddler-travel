<?php

require 'vendor/autoload.php';

use ToddlerTravel\Traveler;
use ToddlerTravel\Country;
use ToddlerTravel\Itinerary;
use ToddlerTravel\Vacation;



// Create Traveler
$mila = new Traveler('Mila');
$mila->setOrientation('girl');
$mila->setAge(1);


// Create Countries to Add to Itinerary for Vacation
$usa = new Country('United States');
$usa->setLanguage('English');
$usa->setPopulation(370);
$usa->setContinent('North America');

$germany = new Country('Germany');
$germany->setLanguage('German');
$germany->setPopulation(180);
$germany->setContinent('Europe');

$france = new Country('France');
$france->setLanguage('French');
$france->setPopulation(160);
$france->setContinent('Europe');

$japan = new Country('Japan');
$japan->setLanguage('Japanese');
$japan->setPopulation(220);
$japan->setContinent('Asia');


// Create a Vacation and Add Some Destinations
$vacation = new Vacation($mila, (new Itinerary));
$vacation->addDestination($usa);
$vacation->addDestination($germany);
$vacation->addDestination($france);
$vacation->addDestination($japan);

$vacation->removeDestination($france);

var_dump($vacation);
