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

Route::group(['middleware' => ['terms']], function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('dashboard', function(){
        return 'DASHBOARD!!!';
    });
});

Route::get('terms', ['as' => 'terms.index', 'uses' => 'AppController@terms']);
Route::post('terms', ['as' => 'terms.accept', 'uses' => 'AppController@termsAccept']);
