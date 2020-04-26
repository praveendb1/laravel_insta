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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');

Route::get('/profiles/{user}', 'ProfilesController@index')->name('profile.show');
