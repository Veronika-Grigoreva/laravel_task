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

Route::get('/depart', 'Dashboard\DepartamentsController@run')->name('depart');

Route::get('/worker', 'Dashboard\WorkersController@run')->name('worker');

Route::get('/add/worker', 'Dashboard\WorkerFormController@add')->name('worker');

Route::get('/edit/worker/{id}', 'Dashboard\WorkerFormController@edit')->name('worker');

Route::get('/add/depart', 'Dashboard\DepartFormController@add')->name('depart');

Route::get('/edit/depart/{id}', 'Dashboard\DepartFormController@edit')->name('depart');

Route::get('/', function () {
    return view('welcome');
});
