<?php

use App\Http\Controllers\API\CompetenceController;
use App\Http\Controllers\API\RelationsController;
use App\Http\Controllers\API\UfController;
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

Route::apiResource('competences', CompetenceController::class);
Route::apiResource('relations', RelationsController::class);
Route::apiResource('ufs', UfController::class);