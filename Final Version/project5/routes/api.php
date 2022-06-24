<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OefeningController;
use App\Http\Controllers\PrestatieController;

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

Route::apiResource('prestaties', PrestatieController::class)->only(['index', 'show']);

Route::post('/login', [AuthenticationController::class, 'login']);

Route::post('/register', [AuthenticationController::class, 'register']);

Route::resource('oefenings',OefeningController::class)->parameters(['oefenings' => 'oefenings']);

Route::group(['middleware' => ['auth:sanctum']], function () {

// PROTECTED ROUTES
    Route::apiResource('prestaties', PrestatieController::class)->except(['index', 'show']);

    Route::get('profile', function(Request $request) { return auth()->user();});

    Route::post('/logout', [AuthenticationController::class, 'logout']);

});


