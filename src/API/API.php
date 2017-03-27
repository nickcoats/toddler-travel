<?php namespace ToddlerTravel\API;

use Requests;

/**
 * Itinerary object contains destinations for a vacation.
 */
class API extends Foundation
{

    public function get($endpoint)
    {
        $uri = $this->request($endpoint);

        $headers = array('Accept' => 'application/json');
        $options = array('auth' => array('admin', 'admin'));
        $request = Requests::get($uri, $headers, $options);

        return json_decode($request->body);
    }

    public function post()
    {

    }

    public function request($endpoint)
    {
        return $this->uri() . $endpoint;
    }

}
