<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\CompetitorController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/minas-informacoes', function () {
    return response()->json([
        'nome' => 'Felipe Rodrigo dos Santos',
        'RM' => '2637'
    ]);
});

route::apiResource('/sports', SportController::class);
route::apiResource('/coachs', CoachController::class);
route::apiResource('/locations', LocationController::class);
route::apiResource('/competitors', CompetitorController::class);