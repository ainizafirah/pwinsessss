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

// Auth::routes ();
// Route::get('/users', 'UserController@index');

// Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/tests', 'TestController');

// Route::get('/tests', 'TestController@index');
// Route::get('/tests/create', 'TestController@create');
// Route::get('/tests/{Test}', 'TestController@show');
// Route::post('/tests','TestController@store');
// Route::get('/tests/{Test}/edit', 'TestController@edit');
// Route::patch('/tests/{Test}', 'TestController@update');
// Route::delete('/tests/{Test}', 'TestController@destroy');


