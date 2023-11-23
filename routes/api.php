<?php

use App\Http\Controllers\HeroesController;
use App\Http\Controllers\MisionController;
use App\Http\Controllers\MisionEquipoController;
use App\Http\Controllers\PlanetaController;
use App\Http\Controllers\PoderHeroeController;
use App\Http\Controllers\SuperpoderController;
use App\Models\MisionEquipo;
use App\Models\Planeta;
use App\Models\PoderHeroe;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::apiResource('heroes',HeroesController::class);

Route::apiResource('planetas', PlanetaController::class);

Route::apiResource('superpoder',SuperpoderController::class);

Route::apiResource('poderheroes',PoderHeroeController::class);

Route::apiResource('misiones',MisionController::class);

Route::apiResource('misionesequipo',MisionEquipoController::class);

