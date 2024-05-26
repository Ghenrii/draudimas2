<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Owner;
use App\Http\Controllers\OwnerAPIController;
use App\Http\Controllers\CarAPIController;

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

Route::get('/owners', [OwnerAPIController::class, 'index']);

Route::get('/owners/{owner}', [OwnerAPIController::class, 'show']);

Route::post('/owners', [OwnerAPIController::class, 'store']);

Route::put('/owners/{owner}', [OwnerAPIController::class, 'update']);

Route::delete('/owners/{owner}', [OwnerAPIController::class, 'destroy']);

Route::get('/cars', [CarAPIController::class, 'index']);

Route::get('/cars/{car}', [CarAPIController::class, 'show']);

Route::post('/cars', [CarAPIController::class, 'store']);

Route::put('/cars/{car}', [CarAPIController::class, 'update']);

Route::delete('/cars/{car}', [CarAPIController::class, 'destroy']);
