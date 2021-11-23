<?php

use App\Http\Controllers\CarsController;
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

Route::get('/cars', [CarsController::class, 'index']);
Route::get('/cars/{car}', [CarsController::class, 'show']);
Route::post('/cars', [CarsController::class, 'store']);
Route::put('/cars/{car}', [CarsController::class, 'update']);
Route::delete('/cars/{car}', [CarsController::class, 'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
