<?php

require 'vendor/autoload.php';

use ToddlerTravel\Traveler;
use ToddlerTravel\Country;
use ToddlerTravel\Itinerary;
use ToddlerTravel\Vacation;
use ToddlerTravel\Format;



// Create Traveler
$mila = new Traveler('Mila');
$mila->setOrientation('girl');
$mila->setAge(1);

var_dump($mila->introduction());


// Create Countries to Add to Itinerary for Vacation
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


// Create a Vacation and Add Some Destinations
$vacation = new Vacation($mila, (new Itinerary));
$vacation->addDestination($usa);
$vacation->addDestination($canada);
$vacation->addDestination($germany);
$vacation->addDestination($france);
$vacation->addDestination($japan);

// Remove a country
//$vacation->removeDestination($france);


// Print out some vacation details
$vacationDetails = new Format($vacation->traveler(), $vacation->itinerary());
var_dump('I\'m going to ' . $vacationDetails->countryNames() . '.');


// Arrange Transportation Based on Where Mila is and Going
var_dump('I\'m traveling by:');
$vacation->arrangeTransportation();


var_dump('It will be a lot of fun!');
