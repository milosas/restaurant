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
})->name('welcome');


// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dishes', 'DishController@index')->name('dish');
Route::get('/dishes/{id}', 'DishController@show')->name('singledish');
Route::delete('/dishes/{dish}','DishController@destroy')->name('dish.delete')->middleware('admin');
Route::get('/adddish','DishController@adddish')->name('dish.create')->middleware('admin');
Route::post('/dishes','DishController@store')->name('store')->middleware('admin');
Route::get('/dishes/{dish}/edit','DishController@edit')->name('dishes.edit')->middleware('admin');
Route::put('/dishes/{dish}/update','DishController@update')->name('dish.update')->middleware('admin');

Route::group(['middleware'=>['admin'], 'prefix'=>'admin'],function(){
  Route::get('/','AdminController@index')->name('admin');
  Route::get('/dishes','DishController@adminIndex')->name('adminDishes');
  Route::get('/dishedit/{dish}','DishController@admindishedit')->name('admindishedit');

  Route::get('/mains','MainController@index')->name('adminMains');

  Route::get('/mainCreate', "MainController@create")->name('mainCreate'); // sukurimas
  Route::post('/mainStore', "MainController@store")->name('mainStore'); // sukurimas

  Route::get('/mainEdit/{main}', 'MainController@edit')->name('mainEdit'); // redaguojam
  Route::put('/main/{main}/update','MainController@update')->name('mainUpdate'); //redaguojam

  Route::delete('/main/{main}','MainController@destroy')->name('mainDelete'); //istrinam

  Route::get('/users', 'UserController@index')->name('usersList');

  Route::get('/userCreate', 'UserController@create')->name('userCreate');
  Route::post('/userStore', 'UserController@store')->name('userStore'); // sukurimas

  Route::get('/users/{user}', 'UserController@edit')->name('usersEdit'); // redaguojam
  Route::put('/users/{user}/update','UserController@update')->name('userUpdate'); //redaguojam

  Route::delete('/users/{user}','UserController@destroy')->name('userDelete'); //istrinam
  });
  Route::get('/usersProfile', 'UserController@show')->name('users.profile');


Route::get('/cart', 'ShoppingCartController@index')->name('show.cart');
Route::post('/cart', 'ShoppingCartController@addToCart')->name('addToCart');
Route::post('/itemdelete','ShoppingCartController@destroy')->name('cart.dish.delete');
Route::post('/itemminus', 'ShoppingCartController@minusDish')->name('cart.dish.minus');
Route::get('/deletecart', 'ShoppingCartController@cleanCart')->name('cleanCart');
Route::post('/reservation', 'ReservationController@store')->name('submitReservation');
Route::get('/reservation', 'ReservationController@index')->name('reservation.index');
Route::delete('/reservationDelete/{reservation}', 'ReservationController@destroy')->name('reservation.delete');

Route::get('/reservation/{reservation}', 'ReservationController@edit')->name('reservation.reservationForm');
Route::put('/reservation/{reservation}/update',   'ReservationController@update')->name('reservation.updateReservation');

Route::get('/newReservation','ReservationController@create')->name('reservation.newReservation');

Route::get('/checkout', 'OrderController@checkout')->name('checkout')->middleware('auth');
// Route::get('/dishes/{id}/edit','DishController@edit')->name('dish.edit');
