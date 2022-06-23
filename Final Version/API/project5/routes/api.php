<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OefeningController;
use App\Http\Controllers\prestatieController;

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

Route::apiResource('prestaties', prestatieController::class)->only(['index', 'show']);

Route::post('/login', [AuthenticationController::class, 'login']);

Route::post('/register', [AuthenticationController::class, 'register']);

Route::resource('oefening',OefeningController::class)->parameters(['oefening' => 'oefening']);

Route::group(['middleware' => ['auth:sanctum']], function () {

// PROTECTED ROUTES
    Route::apiResource('prestaties', prestatieController::class)->except(['index', 'show']);

    Route::get('profile', function(Request $request) { return auth()->user();});

    Route::post('/logout', [AuthenticationController::class, 'logout']);

});


