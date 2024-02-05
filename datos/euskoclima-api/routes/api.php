<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocalizacionController;
use App\Http\Controllers\LocalizacionEuskalmetController;
use App\Http\Controllers\MedicionController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('mediciones/{ciudades}', [MedicionController::class, 'getByIds']);
Route::get('historicoPorDias', [MedicionController::class, 'getMedicionesCiudadPorDia']);
Route::get('historicoPorHoras', [MedicionController::class, 'getMedicionesCiudadPorHora']);
Route::get('historico', [MedicionController::class, 'getMedicionesHoyCiudad']);

Route::middleware('auth:api')->group(function() {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('localizaciones', [LocalizacionController::class, 'index']);
});
