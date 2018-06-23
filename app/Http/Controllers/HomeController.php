<?php

namespace App\Http\Controllers;

use App\Services\Location\LocationService;

class HomeController extends Controller
{
    /** @var LocationService */
    protected $service;

    public function __construct(LocationService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $locations = $this->service->getLocations();

        return view('home.index', ['locations' => $locations]);
    }

    public function getUsers(string $locationId)
    {
        $users = $this->service->getUsers($locationId);

        return view('location.users', ['users' => $users]);
    }

    public function getTimePunches(string $userId)
    {
        $data = $this->service->getTimePunches($userId);

        dd($data);

        return view('location.users', ['users' => $users]);
    }
}
