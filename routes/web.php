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

Route::get('/home', 'Dashboard\HomePageController@index');

Route::get('/depart', 'Dashboard\DepartamentsController@index');
Route::get('/depart/create', 'Dashboard\DepartamentsController@create');
Route::post('/depart/save', 'Dashboard\DepartamentsController@save');
Route::get('/depart/destroy/{id}', 'Dashboard\DepartamentsController@destroy');
Route::get('/depart/edit/{id}', 'Dashboard\DepartamentsController@edit');

Route::get('/worker', 'Dashboard\WorkersController@index');
Route::get('/worker/create', 'Dashboard\WorkersController@create');
Route::post('/worker/save', 'Dashboard\WorkersController@save');
Route::get('/worker/destroy/{id}', 'Dashboard\WorkersController@destroy');
Route::get('/worker/edit/{id}', 'Dashboard\WorkersController@edit');

Route::get('/', function () {
    return view('welcome');
});
