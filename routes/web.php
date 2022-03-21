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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::view('/about/technicaldirector', 'technicaldirector');

Route::get('/login', 'UserController@index');

Route::post('/login','UserController@login');

Route::get('/logout', 'UserController@logout');

Route::get('/register', 'UserController@create');


Route::get('/tour/{id}', 'TourController@show');

Route::get('/tours','TourController@search');