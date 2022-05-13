<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articulosController;
use App\Http\Controllers\AuthController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::GET('/articulos','App\Http\Controllers\articulosController@vistageneral');


Route::post('/articulos','App\Http\Controllers\articulosController@insertar');


Route::post('/login','App\Http\Controllers\AuthController@login' );
