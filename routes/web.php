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
Route::get('/','ProductController@index')->name('index');
Route::get('/product','ProductController@produk')->name('product');
Route::get('/contact', 'ProductController@contact')->name('contact');
Route::get('/show{id}','ProductController@show')->name('show');
Route::post('/store','ProductController@store')->name('store');
Route::get('/edit{id}','ProductController@edit')->name('edit');
Route::get('/delete{id}','ProductController@destroy')->name('destroy');
Route::post('/update{id}','ProductController@update')->name('update');
Route::get('/indoor','ProductController@product_indoor');
Route::get('/outdoor','ProductController@product_outdoor');
Route::get('/accesories','ProductController@product_accesories');
Route::get('/dashboard/create','ProductController@create')->name('create');
Route::get('/dashboard/register','RegisterController@registerForm')->name('registerform');

//auth
Route::post('/logpost','LoginController@login')->name('login');
Route::get('/login','LoginController@loginForm')->name('loginform');
Route::post('/repost','RegisterController@register');
Route::get('/dashboard','ProductController@dashboard')->name('dashboard');
Route::get('/logout','LoginController@logout')->name('logout');

