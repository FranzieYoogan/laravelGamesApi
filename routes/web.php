<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GamesController;

Route::get('/', function () {
    return view('welcome');
});


Route::apiResource('games', GamesController::class);
