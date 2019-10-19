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

Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::get('/category/{id}', 'CategoryController@show')->name('category.show');
Route::post('/category', 'CategoryController@store')->name('category.store');
Route::get('/category/edit', 'CategoryController@edit')->name('category.edit');