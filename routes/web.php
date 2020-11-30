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

Route::get('/', 'WeightController@index')->name('weight.index');
Route::get('/create', 'WeightController@create')->name('weight.create');
Route::post('/', 'WeightController@store')->name('weight.store');
Route::get('/show/{weight}', 'WeightController@show')->name('weight.show');
Route::get('/{weight}/edit', 'WeightController@edit')->name('weight.edit');
Route::patch('/{weight}', 'WeightController@update')->name('weight.update');
Route::delete('/{weight}', 'WeightController@destroy')->name('weight.destroy');
