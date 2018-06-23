<?php

use Tests\Mocks\LocationData;

Route::get('/', 'Home\HomeController@index');

Route::get('/test', function () {
    $data = (new LocationData())->get();

    dd(json_decode($data));
});
