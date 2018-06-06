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

Route::get('/', 'BragController@index');
Route::get('/admin', 'BragController@admin');
Route::get('/{brag}/edit', 'BragController@edit');
Route::patch('/brags/{brag}', 'BragController@update');
Route::get('/brags/create', 'BragController@create');
Route::post('/brags', 'BragController@store');
Route::get('/brags/{brag}/delete', 'BragController@delete');
Route::delete('/brags/{brag}/delete', 'BragController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
