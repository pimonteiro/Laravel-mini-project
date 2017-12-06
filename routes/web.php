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


//Main page
Route::get('/', 'PagesController@home');


//Route::resource('events','EventController');


//User routes
Route::get('login','PagesController@login');
Route::get('register', 'PagesController@register');
Route::get('dashboard','PagesController@dashboard');


Route::post('/authUser','UserController@login');
Route::post('/register','UserController@register');