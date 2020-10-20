<?php

use Illuminate\Support\Facades\Route;


Route::get('/client', 'ClientController@index')->name('client');
