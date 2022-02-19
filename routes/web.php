<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestroController;
use App\Http\Controllers\CustomAuthController;


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

Route::get('/',               'App\Http\Controllers\RestroController@index');
Route::get('/list',           'App\Http\Controllers\RestroController@list');
Route::get('/add',           'App\Http\Controllers\RestroController@add');
Route::get('/delete/{id}',    'App\Http\Controllers\RestroController@delete');
Route::get('/edit/{id}',      'App\Http\Controllers\RestroController@edit');
Route::put('/update/{id}',   'App\Http\Controllers\RestroController@update')->name('update');
