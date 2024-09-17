<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [App\Http\Controllers\indexController::class, 'index']);
Route::get('/addProduct', [App\Http\Controllers\indexController::class, 'addProduct'])->name('addProduct');
Route::get('/addCategory', [App\Http\Controllers\indexController::class, 'addCategory'])->name('addCategory');
Route::post('/storeCategory', [App\Http\Controllers\indexController::class, 'storeCategory'])->name('storeCategory');
Route::get('/showCategory', [App\Http\Controllers\indexController::class, 'showCategory'])->name('showCategory');


