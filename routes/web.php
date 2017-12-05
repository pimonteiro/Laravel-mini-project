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
Route::get('/', function(){
    return view('main');
});




//Route::resource('events','EventController');

//User routes
Route::get('admin/login', function() {
    return view('admin.login');
});

Route::post('/authUser','UserController@login');