<?php

use App\Http\Controllers\HeroesController;
use App\Http\Controllers\PlanetaController;
use App\Http\Controllers\SuperpoderController;
use App\Models\Planeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('heroes',HeroesController::class);

Route::resource('planetas', PlanetaController::class);

Route::resource('superpoder',SuperpoderController::class);

