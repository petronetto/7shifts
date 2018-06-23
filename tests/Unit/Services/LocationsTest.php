<?php

namespace Tests\Unit\Services;

use App\Services\LocationService;
use GuzzleHttp\Client;
use Mockery;
use Tests\Mocks\LocationData;
use Tests\TestCase;

class LocationsTest extends TestCase
{
    public function testGetLocations()
    {
        $http = Mockery::mock(Client::class);

        $locationFakeData = (new LocationData())->get();

        $http->shouldReceive('get')
            ->andReturn($http);

        $http->shouldReceive('getBody')
            ->andReturn($locationFakeData);

        $service = new LocationService($http);

        $data = $service->getLocations();

        $this->assertEquals($data, json_decode($locationFakeData));
    }
}
