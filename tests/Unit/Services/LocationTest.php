<?php

namespace Tests\Unit\Services;

use App\Services\Location\LocationService;
use GuzzleHttp\Client;
use Mockery;
use Tests\Mocks\LocationData;
use Tests\Mocks\UserData;
use Tests\TestCase;

class LocationTest extends TestCase
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

        $this->assertObjectHasAttribute('address', $data->{'25753'});
    }

    public function testGetUsers()
    {
        $http = Mockery::mock(Client::class);

        $usersFakeData = (new UserData())->get();

        $http->shouldReceive('get')
            ->andReturn($http);

        $http->shouldReceive('getBody')
            ->andReturn($usersFakeData);

        $service = new LocationService($http);

        $data = $service->getUsers('25753');

        $this->assertEquals($data, json_decode($usersFakeData)->{'25753'});
        $this->assertObjectHasAttribute('firstName', $data->{'517135'});
    }
}
