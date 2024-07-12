<?php

use Illuminate\Support\Facades\Route;
use \Enzosharp\UserStats\Controllers\UserStatsController;

if (config('es_stats.enabled')) {
    Route::get(config('es_stats.url'), [UserStatsController::class, 'index'])
        ->middleware(config('es_stats.middleware'));
    Route::post(config('es_stats.url').'/add', [UserStatsController::class, 'store'])
        ->middleware(config('es_stats.middleware'));
}
