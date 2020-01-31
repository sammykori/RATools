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

Route::get('/dashboard', 'PagesController@index');
Route::get('/tables', 'TowersController@index');
Route::get('/maps', 'PagesController@map');

Route::resource('towers', 'TowersController');

Route::get('/maps', 'MapsController@index');
Route::get('/', 'MapsController@main');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
