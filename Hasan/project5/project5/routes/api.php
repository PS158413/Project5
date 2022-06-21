<?php

use App\Http\Controllers\PrestatieController;
use App\Http\Controllers\AuthenticationController;

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

Route::apiResource('prestatie', prestatieController::class)->only(['index', 'show']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/register', [AuthenticationController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {

// PROTECTED ROUTES

    Route::get('profile', function(Request $request) { return auth()->user();});

    Route::post('/logout', [AuthenticationController::class, 'logout']);

});
