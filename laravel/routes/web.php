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




Route::get('/','drugmrt@index');
Route::get('add-product','drugmrt@add');
Route::post('insert','drugmrt@insert');
Route::get('stat','drugmrt@stat');
Route::get('/edit/{id}','drugmrt@edit');
Route::get('/delete/{id}','drugmrt@del');
Route::get('/search','drugmrt@search');
Auth::routes();
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('logout', 'drugmrt@logout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
