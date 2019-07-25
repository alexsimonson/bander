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

//the get may be the problem here
Route::get('/send', function(){
    return view('send');
});

Route::resource('/users', 'UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function(){
    Mail::to('shaggy7569@gmail.com')->queue(new \App\Mail\TestEmail());
});

Route::get('/search', function(){
    return view('search');
});