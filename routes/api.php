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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix("catigories")->group(function(){
    Route::get('/', [app\Http\Controllers\CategoryController::class,'index']);
    Route::post('/', [app\Http\Controllers\CategoryController::class,'store']);
    Route::get('/{id}', [App\Http\Controllers\CategoryController::class,'show']);
    Route::put('/{id}', [app\Http\Controllers\CategoryController::class,'update']);
    Route::delete('/{id}', [app\Http\Controllers\CategoryController::class,'destroy']);
});
Route::prefix("products")->group(function(){
    Route::get('/', [app\Http\Controllers\ProductController::class,'index']);
    Route::post('/', [app\Http\Controllers\ProductController::class,'store']);
    Route::get('/{id}', [app\Http\Controllers\ProductController::class,'show']);
    Route::put('/{id}', [app\Http\Controllers\ProductController::class,'update']);
    Route::delete('/{id}', [app\Http\Controllers\ProductController::class,'destroy']);
});
