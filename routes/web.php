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

// Route::prefix("list")->group(function(){
    // Route::get("/",  [RestroController::class, "index"])->name('list.index');
    // Route::get("/add",  [RestroController::class, "add"])->name('list.add');
    // Route::get("/delete/{id}",  [RestroController::class, "delete"])->name('list.delete');
    // Route::get("/edit/{id}",  [RestroController::class, "edit"])->name('list.edit');
    // Route::put("/update/{id}",  [RestroController::class, "update"]);
// }


    // Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
    // Route::get('login', [CustomAuthController::class, 'login'])->name('login');
    // Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
    // Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
    // Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
    // Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
//
//
Route::get('/', 'App\Http\Controllers\RestroController@index');
Route::get('/list', 'App\Http\Controllers\RestroController@list');
Route::view('/add','add');
Route::post('/add','App\Http\Controllers\RestroController@add');
Route::get('/delete/{id}','App\Http\Controllers\RestroController@delete');
Route::get('/edit/{id}','App\Http\Controllers\RestroController@edit');
Route::post('/update/{id}',[RestroController::class, "update"])->name('update');
