<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles',function(){
    return 'Articles Lists';
});

Route::get('/articles/detail', function () {
return 'Article Detail';
});

Route::resource('dashboards', '\App\Http\Controllers\DashboardController');