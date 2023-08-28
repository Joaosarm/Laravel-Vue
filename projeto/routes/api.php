<?php

use App\Http\Controllers\ServicesController;
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

Route::get('/index',[ServicesController::class,'index'])->name('api.index');
Route::post('/store',[ServicesController::class,'store'])->name('api.store');
Route::get('/show/{id}',[ServicesController::class,'show'])->name('api.show');
Route::delete('/delete/{id}',[ServicesController::class,'destroy'])->name('api.destroy');
Route::put('/update/{id}',[ServicesController::class,'update'])->name('api.update');
