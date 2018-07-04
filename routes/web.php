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

Route::get('/', 'TestsController@index');
Route::get('tests/ajax', 'TestsController@ajax')->name('tests.ajax');
Route::post('tests/doSomething', 'TestsController@doSomething')->name('tests.doSomething');
Route::resource('tests', 'TestsController');

