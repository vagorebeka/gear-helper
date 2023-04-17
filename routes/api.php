<?php

use App\Http\Controllers\API\StatisticController;
use App\Http\Controllers\API\CharacterClassController;
use App\Http\Controllers\API\ItemController;
use App\Http\Controllers\API\UserController;
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

Route::apiResource("/statistic", StatisticController::class);
Route::apiResource("/characterclass", CharacterClassController::class);
Route::apiResource("/item", ItemController::class);
Route::apiResource("/user", UserController::class);
