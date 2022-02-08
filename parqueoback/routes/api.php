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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);


Route::group(['middleware'=>'auth:sanctum'],function (){
    Route::post('/me',[\App\Http\Controllers\UserController::class,'me']);
    Route::post('/logout',[\App\Http\Controllers\UserController::class,'logout']);
    Route::resource('/parqueo',\App\Http\Controllers\ParqueoController::class);
    Route::post('/reporte',[\App\Http\Controllers\ParqueoController::class,'reporte']);
    Route::get('/boleta/{id}',[\App\Http\Controllers\ParqueoController::class,'boleta']);
    Route::get('/boletasalida/{id}/{bs}/{horas}',[\App\Http\Controllers\ParqueoController::class,'boletasalida']);
    Route::get('/listuser',[\App\Http\Controllers\ParqueoController::class,'listuser']);
});
