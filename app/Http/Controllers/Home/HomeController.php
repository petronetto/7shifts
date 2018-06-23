<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\LocationService;

class HomeController extends Controller
{
    public function index(LocationService $service)
    {
        $locations = $service->getLocations();

        return view('home.index', ['locations' => $locations]);
    }
}
