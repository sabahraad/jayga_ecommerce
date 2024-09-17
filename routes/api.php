<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('categories', App\Http\Controllers\CategoryController::class);
Route::apiResource('products', App\Http\Controllers\ProductController::class);
Route::apiResource('attributes', App\Http\Controllers\AttributeController::class);
Route::apiResource('attributesValues', App\Http\Controllers\AttributeValueController::class);