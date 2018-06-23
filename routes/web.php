<?php

use Tests\Mocks\LocationData;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/location/{locationId}/users', 'HomeController@getUsers')->name('location.users');
