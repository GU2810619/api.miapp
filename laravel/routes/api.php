<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\PilotosController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* GET */
Route::get('/v1/pilotos', [PilotosController::class, 'getAll']);
/* GET->ITEM */
Route::get('/v1/pilotos/{id}', [PilotosController::class, 'getItem']);
/* POST */
Route::post('/v1/pilotos', [PilotosController::class, 'store']);
/* PUT */
Route::put('/v1/pilotos/{id}', [PilotosController::class, 'update']);
/* PATCH */
Route::patch('/v1/pilotos/{id}', [PilotosController::class, 'patchUpdate']);
/* DELETE */
Route::delete('/v1/pilotos/{id}', [PilotosController::class, 'delete']);