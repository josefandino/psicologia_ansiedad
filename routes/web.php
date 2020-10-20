<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group(['prefix' => 'resultados', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'ResultController@index')->name('results'); 
    Route::get('/create', 'ResultController@create')->name('results.create');
    Route::get('/{results}', 'ResultController@show')->name('results.show');
    Route::post('/', 'ResultController@store')->name('results.store');
    Route::get('/{results}/edit', 'ResultController@edit')->name('results.edit');
    Route::patch('/{results}', 'ResultController@update')->name('results.update');
    Route::delete('/{results}', 'ResultController@destroy')->name('results.destroy');
});