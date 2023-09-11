<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\UserController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','isAdmin']], function () {
    Route::get('/admin', 'App\Http\Controllers\Dashboard\AdminController@index');

    Route::get('/admin/users','App\Http\Controllers\Dashboard\UserController@index');

    Route::get('/admin/{id}/edit_user','App\Http\Controllers\Dashboard\UserController@edit');

    Route::post('/admin/{id}/update','App\Http\Controllers\Dashboard\UserController@update');

    Route::delete('/admin/{id}/delete','App\Http\Controllers\Dashboard\UserController@delete');

    // Route::get('/admin/catgory', 'App\Http\Controllers\CategoryController@index');
    
    Route::resource('/admin/category',CategoryController::class);
    Route::resource('/admin/news',NewsController::class);
    // Route::post('/admin/catgory/entry', 'App\Http\Controllers\CategoryController@store');
});



Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/chat', 'App\Http\Controllers\ChatController@index');
