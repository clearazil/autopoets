<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Event::listen('illuminate.query', function($query) {
	//var_dump($query);
});

Route::get('/', function() {
	return view('index');
});

Route::get('/about', function() {
	return view('about.index');
});

Route::get('/calendar', ['as' => 'calendar', 'uses' => 'CalendarController@index']);
Route::get('/calendar/date', 'CalendarController@show');
Route::get('/calendar/{month}', 'CalendarController@index');
Route::get('/calendar/{monthNum}/{dayNum}/', 'CalendarController@show');

Route::get('/gallery', function() {
	return view('gallery.index');
});

Route::get('/products', 'ProductsController@index');

Route::get('/contact', 'ContactController@index');
Route::post('contact', 'ContactController@send');

Route::get('/admin', function() {
	return "Admin area";
});
