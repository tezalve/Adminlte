<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminLteController;
use App\Http\Controllers\PostController;

Auth::routes(); 
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

Route::get('/starter', [AdminLteController::class, 'starter']);
Route::get('/', [AdminLteController::class, 'index']);
Route::get('/home', [AdminLteController::class, 'index']);
Route::get('/index2', [AdminLteController::class, 'index2']);
Route::post('store-form', [UserController::class, 'store']);


// Route::get('/user', [UserController::class, 'user']);

Route::get('/view', [UserController::class, 'view']);

// Route::get('user/{id}/cancel', [UserController::class, 'destroy']);

Route::resource('users', UserController::class);

Route::get('/user', [UserController::class, 'user']);


// Route::resource('users',          '\App\Http\Controllers\UserController');

// Route::post('userslocationlist', 'UsersController@userslocationlist');
// Route::get('reset',             'UsersController@reset');
// Route::post('users_list',            'UsersController@users_list');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
