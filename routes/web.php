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

Auth::routes();

//web worker data general routes
Route::any('/wwdata/generate/{param_1}/{param_2}/{param_3}', 'wwdata@generate');
Route::any('/wwdata/autocomplete', 'wwdata@autocomplete');
Route::any('/wwdata/accordion', 'wwdata@accordion');

//web worker form general routes
Route::any('/wwform/generate', 'wwform@generate');
Route::post('/wwform/postdata', 'wwform@postdata');

// default routes
Route::any('/', 'backend@index');


Route::any('/{param_1}', 'backend@index');
Route::any('/{param_1}/{param_2}', 'backend@index');
Route::any('/{param_1}/{param_2}/{param_3}', 'backend@index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
