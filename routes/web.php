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
Route::get('/contact','ProductController@contact')->name('contact');
Route::get('/product','ProductController@product')->name('product');
Route::get('/index','ProductController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
