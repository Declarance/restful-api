<?php

use App\Http\Controllers\API\FilmController;
use App\Http\Controllers\API\ActorController;
use App\Http\Controllers\API\GenreController;
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

Route::resource('films', FilmController::class);
Route::get('films/sorted', [FilmController::class, 'sorted']);
Route::resource('actors', ActorController::class);
Route::resource('genres', GenreController::class);
Route::get('films/genres/{genre}', [FilmController::class, 'genre']);