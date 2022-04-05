<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
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

Route::middleware('admin')->group(function(){

    Route::get('/tour/new','TourController@create');

    Route::post('/tour/new', 'TourController@store');

    Route::get('/tour/edit/{id}', 'TourController@edit')->name('editTour');

    Route::post('/tour/update/{id}', 'TourController@update')->name('updateTour');
    
    Route::get('/tour/delete/{id}','TourController@destroy')->name('deleteTour');
});


Route::middleware('customer')->group(function(){

    Route::get('/tour/{id}/book','BookController@create')->name('tour.book');
    Route::get('/history','BookController@history')->name('history');
    Route::post('/tour/{id}/book','BookController@preparePayment')->name('preparepayment');
    Route::post('payment','BookController@payment')->name('payment');
    Route::post('/Comment/{tour_id}','CommentController@store')->name('comment');
    

});

Route::get('/tour/{id}', 'TourController@show')->name('tourDetails');

Route::get('/tours','TourController@search');

Route::get('/test',function(){
    return view('history');
});

Route::get('/result','testsessionController@result');

Route::get('/sbook',function() {return view('book');});

Route::get('/time', function(){
    return Carbon::now()->toDateTimeString();
});

Route::post('/api/addComment', 'ApiController@addComment');
