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
Route::get('/',function(){

    return view('main');
});

Route::get('dashboard/events/{name}','EventController@show');

//User routes

Route::middleware('auth')->group(function (){
    Route::get('dashboard','DashboardController@home');
    Route::post('dashboard/add_event','EventController@store')->name('add_event');
    Route::get('dashboard/del_event/{name}','EventController@delete_event');
    Route::get('dashboard/del_user','EventController@delete_user');
    Route::get('dashboard/profile','EventController@profile');
});


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
