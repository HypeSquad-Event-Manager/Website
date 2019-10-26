<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'GuestController@index')->name('home');


Route::prefix('auth')->group(function () {
    Route::get('login', 'AuthController@redirectToProvider')->name('login');
    Route::get('callback', 'AuthController@handleProviderCallback');
    Route::get('logout', 'AuthController@handleLogout')->name('logout');
});








Route::get('/home', 'HomeController@index')->name('home');
