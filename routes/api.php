<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PemesananApiController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PeminjamanApiController;
use App\Http\Controllers\Api\BukuApiController;
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
//jwt

Route::post('register', [AuthController::class, 'register']);
Route::post('login',    [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('profile', [AuthController::class, 'profile']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/peminjaman', [PeminjamanApiController::class, 'index']);
Route::get('/peminjaman/{id}', [PeminjamanApiController::class, 'show']);
Route::post('/peminjaman', [PeminjamanApiController::class, 'store']);
Route::put('/peminjaman/{id}', [PeminjamanApiController::class, 'update']);
Route::delete('/peminjaman/{id}', [PeminjamanApiController::class, 'destroy']);


Route::get('/buku', [BukuApiController::class, 'index']);
Route::get('/buku/{id}', [BukuApiController::class, 'show']);
Route::post('/buku', [BukuApiController::class, 'store']);
Route::put('/buku/{id}', [BukuApiController::class, 'update']);
Route::delete('/buku/{id}', [BukuApiController::class, 'destroy']);


Route::get('/pemesanan', [PemesananApiController::class, 'index']);
Route::post('/pemesanan', [PemesananApiController::class, 'store']);
Route::get('/pemesanan/{id}', [PemesananApiController::class, 'show']);
Route::put('/pemesanan/{id}', [PemesananApiController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananApiController::class, 'destroy']);
