<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcertController;

Route::get('/', [ConcertController::class, 'index'])
    ->name('concerts.index');

Route::get('/concerts/create', [ConcertController::class, 'create'])
    ->name('concerts.create');

Route::post('/concerts', [ConcertController::class, 'store'])
    ->name('concerts.store');

Route::delete('/concerts/{concert}', [ConcertController::class, 'destroy'])
    ->name('concerts.destroy');

Route::get('/concerts/{concert}', [ConcertController::class, 'show'])
    ->name('concerts.show');

Route::get('/concerts/{concert}/edit', [ConcertController::class, 'edit'])
    ->name('concerts.edit');

Route::put('/concerts/{concert}', [ConcertController::class, 'update'])
    ->name('concerts.update');