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

    $events= [
        'Example Event 1',
        'Event Example 2',
        'Event Example 3',
        'Event Example 4',
        'Event Example 5',
        'Event Example 6',
    ];

    return view('welcome', compact('events'));
});

Route::get('/aboutus', function(){
    return view('aboutus');

});

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
//Route::get('/eventlist', 'EventsController@create');
