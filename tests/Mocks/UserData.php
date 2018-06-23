<?php

namespace Tests\Mocks;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function GuzzleHttp\json_decode;

class UserData
{
    public function get(): string
    {
        return '{
            "25753": {
                "517135": {
                    "active": true,
                    "created": "2017-07-06 22:40:21",
                    "email": "abf@7shiftstest.com",
                    "firstName": "Jeff",
                    "hourlyWage": 0.0,
                    "id": 517135,
                    "lastName": "Thompson",
                    "locationId": 25753,
                    "modified": "2018-06-16 20:47:28",
                    "photo": "https://randomuser.me/api/portraits/men/72.jpg",
                    "userType": 2
                },
                "517147": {
                    "active": true,
                    "created": "2017-07-06 22:54:02",
                    "email": "email@7shiftstest.com",
                    "firstName": "Anna",
                    "hourlyWage": 10.0,
                    "id": 517147,
                    "lastName": "Smith",
                    "locationId": 25753,
                    "modified": "2017-09-07 20:27:43",
                    "photo": "https://randomuser.me/api/portraits/women/59.jpg",
                    "userType": 3
                },
                "517148": {
                    "active": true,
                    "created": "2017-07-06 22:54:02",
                    "email": "b@johnson.com",
                    "firstName": "Bobby",
                    "hourlyWage": 10.0,
                    "id": 517148,
                    "lastName": "Johnson",
                    "locationId": 25753,
                    "modified": "2018-01-12 01:17:44",
                    "photo": "https://randomuser.me/api/portraits/women/11.jpg",
                    "userType": 1
                },
                "517149": {
                    "active": true,
                    "created": "2017-07-06 22:54:02",
                    "email": "carlo@test.com",
                    "firstName": "Carlo",
                    "hourlyWage": 10.0,
                    "id": 517149,
                    "lastName": "Adams",
                    "locationId": 25753,
                    "modified": "2018-02-16 15:43:11",
                    "photo": "https://randomuser.me/api/portraits/women/37.jpg",
                    "userType": 1
                },
                "517150": {
                    "active": 0,
                    "created": "2017-07-06 22:54:02",
                    "email": "rosa.andersen@example.com",
                    "firstName": "Dennis",
                    "hourlyWage": 10.0,
                    "id": 517150,
                    "lastName": "Carlson",
                    "locationId": 25753,
                    "modified": "2018-06-04 17:35:42",
                    "photo": "https://randomuser.me/api/portraits/women/76.jpg",
                    "userType": 1
                }
            }
        }';
    }
}
