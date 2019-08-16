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

Route::get('/Anasayfa', function () {
    return view('anasayfa');
});
Route::get('/updatePage', function () {
    return view('update');
});
Route::get('/registerPage', function () {
    return view('register');
});
Route::get('/deletePage', function () {
    return view('delete');
});

Route::get('show', 'PageController@index');
Route::post('add', 'PageController@store')->name('ekle');
//Route::get('add', 'PageController@store');
Route::post('update', 'PageController@update')->name('update');
//Route::get('update/{id}', 'PageController@update');
Route::post('delete', 'PageController@destroy')->name('delete');
//Route::get('delete/{baslik}', 'PageController@destroy');

//Route::post('form', 'PostController@deneme')->name('postData');
