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
Route::get('/dishes', 'DishController@index')->name('dish');
Route::get('/dishes/{id}', 'DishController@show')->name('singledish');
Route::delete('/dishes/{id}','DishController@destroy')->name('dish.delete');
Route::get('/adddish','DishController@adddish')->name('dish.create');
Route::post('/dishes','DishController@store')->name('store');
Route::get('/dishes/{dish}/edit','DishController@edit')->name('dishes.edit');
Route::put('/dishes/{dish}/update','DishController@update')->name('dish.update');


// Route::get('/dishes/{id}/edit','DishController@edit')->name('dish.edit');
