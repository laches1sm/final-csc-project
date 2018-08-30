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

Route::get('/', 'EventsController@create');

Route::get('/login', function(){
    return view('login');

});

Route::get('/menu', function(){
    return view('menu');

});

Route::get('/eventform', function(){
    return view('eventform');

});

Route::get('/register', function()
{
return view('register');
});


Route::post('events', 'EventsController@store');

Auth::routes();

Route::get('/eventslist', 'EventsController@create');


Route::get('/eventpage/{id}', 'EventsController@getEvent');
    