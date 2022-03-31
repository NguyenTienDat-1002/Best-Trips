<?php

use Illuminate\Support\Facades\Route;
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
// Home Route
Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::view('/about/technicaldirector', 'technicaldirector');

Route::view('/about/CEO', 'CEO');

// User Route

Route::get('/login', 'UserController@index');

Route::post('/login','UserController@login');

Route::get('/logout', 'UserController@logout');

Route::get('/register', 'UserController@create');

Route::post('/register', 'UserController@store');

// Tour route

Route::get('/tour/new','TourController@create');
Route::post('/tour/new', 'TourController@store');

Route::get('/tour/edit/{id}', 'TourController@edit')->name('editTour');
Route::post('/tour/update/{id}', 'TourController@update')->name('updateTour');

Route::get('/tour/delete/{id}','TourController@destroy');

Route::get('/tour/{id}/book','TourController@book');

Route::get('/tour/{id}', 'TourController@show');

Route::get('/tours','TourController@search');





