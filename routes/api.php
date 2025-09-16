<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/gateway/user/{user_id}', [GatewayController::class, 'getUser']);


use App\Http\Controllers\GatewayController;

Route::get('/gateway/produtos', [GatewayController::class, 'getProdutos']);

