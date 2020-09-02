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
Route::any('/wwdata/generate/{param_1}/{param_2}/{param_3}/{param_4}', 'WwdataController@generate');
Route::any('/wwdata/autocomplete', 'WwdataController@autocomplete');
Route::any('/wwdata/accordion', 'WwdataController@accordion');

//web worker form general routes
Route::any('/wwform/generate', 'WwformController@generate');
Route::post('/wwform/postdata', 'WwformController@postdata');

// default routes
Route::any('/', 'MainController@index');


Route::any('/{param_1}', 'MainController@index');
Route::any('/{param_1}/{param_2}', 'MainController@index');
Route::any('/{param_1}/{param_2}/{param_3}', 'MainController@index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();