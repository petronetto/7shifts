<?php

namespace Tests\Mocks;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function GuzzleHttp\json_decode;

class LocationData
{
    public function get(): string
    {
        return '{
            "25753": {
              "address": "7shifts Brazil",
              "city": "São Paulo",
              "country": "US",
              "created": "2017-07-06 22:40:21",
              "id": 25753,
              "labourSettings": {
                "autoBreak": false,
                "autoBreakRules": [
                  {
                    "breakLength": 30,
                    "threshold": 480
                  },
                  {
                    "breakLength": 30,
                    "threshold": 480
                  }
                ],
                "dailyOvertimeMultiplier": 1.5,
                "dailyOvertimeThreshold": 480,
                "overtime": true,
                "weeklyOvertimeMultiplier": 2.0,
                "weeklyOvertimeThreshold": 2400
              },
              "lat": 34.0522342,
              "lng": -118.2436849,
              "modified": "2018-06-08 17:57:23",
              "state": "CA",
              "timezone": "America/Sao_Paulo"
            }
        }';
    }
}
