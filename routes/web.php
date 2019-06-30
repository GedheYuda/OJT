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
Route::resource('product', 'ProductController');
Route::get('/','ProductController@index')->name('index');
Route::get('/create','ProductController@create')->name('create');
Route::get('/product','ProductController@produk')->name('product');
Route::get('/contact', 'ProductController@contact')->name('contact');

//auth
Route::post('/logpost','LoginController@login')->name('login');
Route::get('/login','LoginController@loginForm')->name('loginform');
Route::get('/register','RegisterController@registerForm')->name('registerform');
Route::post('/repost','RegisterController@register');
Route::get('/dashboard','ProductController@dashboard')->name('dashboard');
Route::get('/logout','LoginController@logout')->name('logout');
Route::get('/show{id}','ProductController@show')->name('show');
/*
Route::get('/edit{id}','ProductController@edit')->name('edit');
Route::get('/delete{id}','ProductController@delete')->name('delete');
*/

