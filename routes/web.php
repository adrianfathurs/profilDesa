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

// Route::get('/wisata', 'TourismController@index')->name('/');
// Route::post('saveTourism', 'TourismController@store')->name('saveTourism');
// Route::get('/wisata/{id}', 'TourismController@show');

Route::resources([
    'tourism' => 'TourismController',
]);

Route::resources([
    'umkm'=>'UmkmController',
]);
Route::resources([
    'umkm_pic'=>'Umkm_picController',
]);


Route::post('/umkm_pic/{umkm_id}', 'Umkm_picController@store');
Route::DELETE('/umkm/umkm_pic/deletePic/{umkm_id}', 'Umkm_picController@destroy');

Route::post('/tourism_pic/{tourism_id}', 'Tourism_picController@store');
Route::get('tourism_pic/{tourism_id}', [
    'as' => 'tourism_pic',
    'uses' => 'Tourism_picController@show'
]);

Route::get('/umkm', function () {
    return view('umkm/index');
});

Route::get('/contact', function () {
    return view('content/contact');
});



Route::post('saveUmkm', 'UmkmController@store')->name('saveUmkm');
Route::get('/umkm', 'UmkmController@index')->name('/umkm');


Route::get('/home', 'HomeController@random')->name('home');

Route::get('/', 'HomeController@random')->name('/');

Auth::routes();
