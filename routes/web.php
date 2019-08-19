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
Route::get('get_games', 'PageController@index');
Route::post('add', 'PageController@store')->name('ekle');
Route::post('update', 'PageController@update')->name('update');
Route::post('delete', 'PageController@destroy')->name('delete');


Route::get('/updateGamerPage', function () {
    return view('updateGamer');
});
Route::get('/registerGamerPage', function () {
    return view('registerGamer');
});
Route::get('/deleteGamerPage', function () {
    return view('deleteGamer');
});
Route::get('get_gamers', 'GamerController@index');
Route::post('addGamer', 'GamerController@store')->name('ekleGamer');
Route::post('updateGamer', 'GamerController@update')->name('updateGamer');
Route::post('deleteGamer', 'GamerController@destroy')->name('deleteGamer');


Route::get('/getGames', 'ScoreboardController@getGames');
Route::get('/skorTahtasi', 'ScoreboardController@scoreboardTahtasi');
Route::get('/getAddScore/{gameId}/{userId}/{score}', 'ScoreboardController@addScore');
Route::get('/skorboard/{gameId}', 'ScoreboardController@getScoreboard');
