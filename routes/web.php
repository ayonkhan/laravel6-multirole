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


Route::get('/', 'Auth\LoginController@showSignInPage');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Login Route
Route::get('login', 'Auth\LoginController@showSignInPage')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');
