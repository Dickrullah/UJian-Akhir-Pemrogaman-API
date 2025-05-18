<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PemesananApiController;
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

Route::get('/pemesanan', [PemesananApiController::class, 'index']);
Route::post('/pemesanan', [PemesananApiController::class, 'store']);
Route::get('/pemesanan/{id}', [PemesananApiController::class, 'show']);
Route::put('/pemesanan/{id}', [PemesananApiController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananApiController::class, 'destroy']);
