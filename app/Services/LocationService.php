<?php

namespace App\Services;

use GuzzleHttp\Client;

class LocationService extends Service
{
    /** @var Client */
    protected $http;

    public function __construct(Client $http)
    {
        $this->http = $http;
    }

    public function getLocations()
    {
        // This URL must be in some config file or something like that
        // but for simplicity, I'll put that direct here.
        $response = $this->http->get('https://shiftstestapi.firebaseio.com/locations.json');

        return json_decode($response->getBody());
    }
}
