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

Route::get('/', 'InfoController@HomePage')->name('Home');

Route::get('/contact', 'InfoController@ContactPage')->name('Contact');

Route::resource('info', 'InfoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
