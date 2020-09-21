<?php

use Illuminate\Support\Facades\Route;


//Route::group(['namespace'=> 'Dashboard', 'middleware'=>'auth:admin'],function (){
// Route::get('/','AdminController@index')->name('admin.dashboard');
Route::group(['namespace'=> 'Dashboard'],function (){
    Route::resource('serveurs', 'ServeurController');


    Route::get('serveurs_datatable_crud','ServeurController@index');
    //Route::get('/serveurs', 'ServeurController@index')->name('server.index');




    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postlogin')->name('admin.post.login');

});
