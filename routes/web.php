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
Route::get('/information', 'GuestController@info')->name('info');


Route::prefix('auth')->group(function () {
    Route::get('login', 'AuthController@redirectToProvider')->name('login');
    Route::get('callback', 'AuthController@handleProviderCallback');
    Route::get('logout', 'AuthController@handleLogout')->name('logout');
});

Route::get('/map', 'HomeController@map')->name('map');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::prefix('organize')->group(function () {
   Route::prefix('new')->group(function () {
       Route::get('/event', 'HomeController@event')->name('new_event');
       Route::post('/event', 'HomeController@postevent');
   });
});

Route::get('/success', 'HomeController@success')->name('success');

Route::get('/error', 'HomeController@error')->name('error');

Route::prefix('user')->group(function () {
	Route::get('/profile', 'HomeController@profile')->name('profile');
});

Route::prefix('invitation')->group( function () {
    Route::get('rsvp', 'HomeController@rsvp')->name('rsvp');
    Route::post('rsvp', 'HomeController@postrsvp');
});
