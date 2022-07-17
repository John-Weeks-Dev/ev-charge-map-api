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

Route::post('/places', [\App\Http\Controllers\Api\Google\GooglePlacesController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [\App\Http\Controllers\Api\User\UserController::class, 'index']);
    Route::put('/user', [\App\Http\Controllers\Api\User\UserController::class, 'update']);
    Route::post('/routes', [\App\Http\Controllers\Api\Route\RouteController::class, 'store']);
    Route::delete('/routes/{id}', [\App\Http\Controllers\Api\Route\RouteController::class, 'destroy']);
    Route::get('/user/routes/{id}', [\App\Http\Controllers\Api\RoutesByUserId\RoutesByUserIdController::class, 'show']);
    Route::get('logout', [\App\Http\Controllers\Api\Auth\AuthController::class, 'logout']);
});
