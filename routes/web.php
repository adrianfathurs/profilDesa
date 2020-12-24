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

Route::get('/', function () {
    return view('content/homePage');
});

<<<<<<< HEAD
Route::get('/about', function () {
    return view('content/aboutPage');
});
=======

Route::get('/wisata', function () {
    return view('wisata/index');
});

Route::get('/umkm', function () {
    return view('umkm/index');
});

Route::get('/contact', function () {
    return view('content/contact');
});

Route::post('saveTourism','TourismController@store')->name('saveTourism');
Route::post('saveUmkm','UmkmController@store')->name('saveUmkm');
Route::get('/','TourismController@index')->name('/');
Route::get('/umkm','UmkmController@index')->name('/umkm');
Route::DELETE('/umkm/deleteUmkm/{id}','UmkmController@destroy');

>>>>>>> master
