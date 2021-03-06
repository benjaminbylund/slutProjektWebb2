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

//index page
Route::get('/', function () {
    return view('welcome');
});

//about page
Route::get('/about', function () { 
    
    return view('about');
});

Route::get('/words', 'WordsController@index');

Route::get('/about', 'WordsController@raw');

Route::get('/nyttord', function () {
    return redirect('about');
});