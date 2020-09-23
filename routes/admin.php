<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataTablesController;

Route::group(['namespace' => 'Dashboard'], function () {

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

//////////////////////////////////// Route Serveur /////////////////////////////////////////
    Route::get('serveurs_datatable_index', 'ServeurController@index')->name('serveurs_datatable_index');
    Route::post('serveurs_datatable_delete', 'ServeurController@destroy');
    Route::post('serveurs_datatable_update', 'ServeurController@edit');
    Route::post('serveurs_datatable_store', 'ServeurController@store');
/////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// Route Client /////////////////////////////////////////
    Route::get('clients_index', 'ClientController@index')->name('clients_index');
    Route::post('clients_delete', 'ClientController@destroy');
    Route::post('clients_update', 'ClientController@edit');
    Route::post('clients_store', 'ClientController@store');
/////////////////////////////////////////////////////////////////////////////////////////////


});

Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postlogin')->name('admin.post.login');

});
