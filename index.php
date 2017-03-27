<?php

require 'vendor/autoload.php';

use ToddlerTravel\Traveler;
use ToddlerTravel\Country;
use ToddlerTravel\Itinerary;
use ToddlerTravel\API\API;
use ToddlerTravel\Narrative\Narrative;



$api = new API();
$narrative = new Narrative();
$itinerary = new Itinerary();

// Create Traveler Object
$traveler = $api->get("traveler");
$mila = new Traveler($traveler->name, $traveler->orientation, $traveler->age);

// Get countries from API and add them to itinerary
$itinerary->addCountries($api->get("country"));

// Print out some vacation details
$narrative->introduceTraveler($mila);
$narrative->sayCountries($itinerary);
$narrative->sayTravel($itinerary);
