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
    return view('layouts.app');
});

Auth::routes();

Route::get('/paypal/pay', [App\Http\Controllers\PaymentController::class,'payWithPayPal']);
Route::get('/paypal/status', [App\Http\Controllers\PaymentController::class,'payPalStatus']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/category',App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::resource('/product',App\Http\Controllers\ProductController::class)->middleware('auth');
Route::resource('/person',App\Http\Controllers\PersonController::class)->middleware('auth');
Route::resource('/shipping',App\Http\Controllers\ShippingController::class)->middleware('auth');
Route::resource('/actor',App\Http\Controllers\ActorController::class)->middleware('auth');
Route::resource('/game',App\Http\Controllers\GameController::class)->middleware('auth');
Route::resource('/serie',App\Http\Controllers\SerieController::class)->middleware('auth');
Route::resource('/movie',App\Http\Controllers\MovieController::class)->middleware('auth');
Route::resource('/sale',App\Http\Controllers\SaleController::class)->middleware('auth');
