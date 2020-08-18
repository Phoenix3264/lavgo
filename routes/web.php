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
<<<<<<< HEAD
Route::any('/wwdata/generate/{param_1}/{param_2}/{param_3}', 'WwdataController@generate');
Route::any('/wwdata/autocomplete', 'WwdataController@autocomplete');
Route::any('/wwdata/accordion', 'WwdataController@accordion');
=======
Route::any('/wwdata/generate/{param_1}/{param_2}/{param_3}', 'wwdata@generate');
Route::any('/wwdata/autocomplete', 'wwdata@autocomplete');
>>>>>>> parent of aa0b3412... up

//web worker form general routes
Route::any('/wwform/generate', 'WwformController@generate');
Route::post('/wwform/postdata', 'WwformController@postdata');

// default routes
Route::any('/', 'BackendController@index');


Route::any('/{param_1}', 'BackendController@index');
Route::any('/{param_1}/{param_2}', 'BackendController@index');
Route::any('/{param_1}/{param_2}/{param_3}', 'BackendController@index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
