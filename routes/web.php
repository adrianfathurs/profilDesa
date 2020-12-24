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

Route::get('/wisata', 'TourismController@index')->name('/');

Route::get('/contact', function () {
    return view('content/contact');
});

Route::post('saveTourism', 'TourismController@store')->name('saveTourism');
Route::post('saveUmkm', 'UmkmController@store')->name('saveUmkm');
Route::get('/', 'TourismController@index')->name('/');
Route::get('/about', 'AboutController@index');
Route::get('/umkm', 'UmkmController@index')->name('/umkm');
Route::DELETE('/umkm/deleteUmkm/{id}', 'UmkmController@destroy');
Route::get('/', 'HomeController@random')->name('/');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
