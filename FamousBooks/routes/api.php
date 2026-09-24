<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamousBooksController;

Route::apiResource('famous-books', FamousBooksController::class);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');