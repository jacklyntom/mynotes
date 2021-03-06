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

// Route::get('/', function () {
//     return view('welcome');
// }
Route::get('/', "MainController@index");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('infos', 'InfoController');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('photos', 'PhotoController');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('links', 'LinkController');
Route::post('/home', 'HomeController@index')->name('home');
Route::resource('videos', 'VideoController');




