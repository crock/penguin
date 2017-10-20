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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/beta', 'Auth\BetaController@beta')->name('beta');
Route::post('/join-beta', 'Auth\BetaController@requestInvite')->name('join-beta');

Route::group(['prefix' => 'check'], function () {
    Route::get('{service}/{word}', ['uses' => 'ParseController@parse', 'as' => 'check']);
});