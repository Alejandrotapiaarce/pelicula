<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/productos/{id}', [App\Http\Controllers\ProductController::class, 'apiProducts'])->name('api.products');
Route::get('v1/peliculas/{id}', [App\Http\Controllers\MovieController::class, 'apiMovies'])->name('api.movies');
Route::get('v1/series/{id}', [App\Http\Controllers\SerieController::class, 'apiSeries'])->name('api.series');
Route::get('v1/juegos/{id}', [App\Http\Controllers\GameController::class, 'apiGames'])->name('api.games');
