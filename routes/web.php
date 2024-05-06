<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ConsoleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games/create', [GameController::class, 'create'])->name('games.create'); 
Route::post('/games/store', [GameController::class, 'store'])->name('games.store'); 
Route::get('/games/index', [GameController::class, 'index'])->name('games.index');
Route::get('/games/show/{game}', [GameController::class, 'show'])->name('games.show');
Route::get('/games/edit/{game}', [GameController::class, 'edit'])->name('games.edit');
Route::put('/games/update/{game}', [GameController::class, 'update'])->name('games.update');

Route::get('games/console/{console}', [ConsoleController::class, 'games'])->name('console.games');