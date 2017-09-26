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

Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('/dosen', 'HomeController@index')->name('dosen');

Route::get('/dosen', function () {
    return view('dosen');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/galeri', function () {
    return view('galeri');
});
