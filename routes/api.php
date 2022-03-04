<?php

use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\AuthController;
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
Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
});


Route::middleware('auth:api')->group(function () {
    Route::apiResource('events', EventController::class);
    Route::get('auth/me', [AuthController::class, 'me']);
    Route::delete('auth/logout', [AuthController::class, 'logout']);
});


