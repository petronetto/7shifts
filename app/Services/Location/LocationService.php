<?php

namespace App\Services\Location;

use App\Services\Service;
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

    public function getUsers(string $locationId)
    {
        // Same observation as getLocations
        $response = $this->http->get('https://shiftstestapi.firebaseio.com/users.json');

        $users = json_decode($response->getBody());

        if (property_exists($users, $locationId)) {
            return $users->{$locationId};
        }

        return abort(404);
    }

    public function getTimePunches(string $userId)
    {
        // Same observation as getLocations
        $response = $this->http->get('https://shiftstestapi.firebaseio.com/timePunches.json');

        $times = json_decode($response->getBody());

        $data = [];

        foreach ($times as $t) {
            $weekNum = (int) (new \DateTime($t->clockedIn))->format("W");
            $diff = strtotime($t->clockedOut) - strtotime($t->clockedIn);
            $data[$t->userId][$weekNum][] = [
                'clockedIn'  => $t->clockedIn,
                'clockedOut' => $t->clockedOut,
                'total' => round($diff/60/60, 2),
            ];
        }

        dd($data);

        return abort(404);
    }
}
