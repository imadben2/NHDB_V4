<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataTablesController;

Route::group(['namespace' => 'Dashboard','middleware'=>'auth:admin','prefix' => 'admin'], function () {

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('logout','LoginController@logout')->name('admin.logout');


//////////////////////////////////// Route Serveur /////////////////////////////////////////
    Route::get('serveurs_datatable_index', 'ServeurController@index')->name('serveurs_datatable_index');
    Route::post('serveurs_datatable_delete', 'ServeurController@destroy');
    Route::post('serveurs_datatable_update', 'ServeurController@edit');
    Route::post('serveurs_datatable_store', 'ServeurController@store');
/////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// Route Client /////////////////////////////////////////
    Route::get('/clients_index', 'ClientController@index')->name('clients_index');
    Route::get('clients_Ajouter', 'ClientController@create')->name('clients_Ajouter');
    Route::post('clients_delete', 'ClientController@destroy');
    Route::post('clients_update', 'ClientController@edit');
    Route::post('clients_store', 'ClientController@store')->name('clients_store');
/////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// Route Formules /////////////////////////////////////////
    Route::get('indexMutalise', 'FormulController@index')->name('indexMutalise');
    Route::get('indexVps', 'FormulController@index')->name('indexVps');
    Route::get('indexHa', 'FormulController@index')->name('indexHa');

    Route::post('indexHa_update', 'FormulController@edit')->name('indexHa_update');
    Route::post('indexHa_delete', 'FormulController@destroy')->name('indexHa_delete');
    Route::post('indexHa_store', 'FormulController@store')->name('indexHa_store');

    Route::post('Mutalise_update', 'FormulController@edit')->name('Mutalise_update');
    Route::post('Mutalise_delete', 'FormulController@destroy')->name('Mutalise_delete');
    Route::post('Mutalise_store', 'FormulController@store')->name('Mutalise_store');

    Route::post('Vps_update', 'FormulController@edit')->name('Vps_update');
    Route::post('Vps_delete', 'FormulController@destroy')->name('Vps_delete');
    Route::post('Vps_store', 'FormulController@store')->name('Vps_store');

/////////////////////////////////////////////////////////////////////////////////////////////


});

Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postlogin')->name('admin.post.login');
});
