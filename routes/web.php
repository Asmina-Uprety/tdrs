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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/destination', 'DestinationController');
// Route::get('/destination/create', 'DestinationController@create');
// Route::post('/destination', 'DestinationController@store');
Route::get('/user/profile','ProfileController@create');
Route::put('/profile/{profile}','ProfileController@update');
Route::get('/user','UserController@index');