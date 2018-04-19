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
Route::get('/book', 'MainController@customerDashboard');
Route::get('/dashboard', 'MainController@driverDashboard');
Route::get('/views', 'MainController@adminDashboard');

Route::post('/insert', 'MainController@driverdetails');
Route::post('/booktrip', 'MainController@book');
Route::post('/status', 'MainController@changeavailability');
Route::post('/complete', 'MainController@tripcompletion');
