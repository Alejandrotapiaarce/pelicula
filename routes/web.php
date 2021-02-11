<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/limpiar', function () {
   \Cart::clear();
});

Route::get('/paypal/pay', [App\Http\Controllers\PaymentController::class,'payWithPayPal']);
Route::get('/paypal/status', [App\Http\Controllers\PaymentController::class,'payPalStatus']);

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('page.index');
Route::get('/lista-productos', [App\Http\Controllers\PageController::class, 'products'])->name('page.products');
Route::get('/cart/{id?}', [App\Http\Controllers\PageController::class, 'cart'])->name('page.cart');
Route::get('/delete/{id}', [App\Http\Controllers\PageController::class, 'delete'])->name('page.delete');
Route::get('/chekout', [App\Http\Controllers\PageController::class, 'chekout'])->name('page.chekout');

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
Route::get('/sale/detail/{id}', [App\Http\Controllers\SaleController::class, 'detail'])->name('sale.detail')->middleware('auth');
