<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/category',App\Http\Controllers\CategoryController::class);
Route::resource('/product',App\Http\Controllers\ProductController::class);
Route::resource('/person',App\Http\Controllers\PersonController::class);
Route::resource('/shipping',App\Http\Controllers\ShippingController::class);
Route::resource('/actor',App\Http\Controllers\ActorController::class);
Route::resource('/game',App\Http\Controllers\GameController::class);
Route::resource('/serie',App\Http\Controllers\SerieController::class);
Route::resource('/movie',App\Http\Controllers\MovieController::class);
Route::resource('/sale',App\Http\Controllers\SaleController::class);
