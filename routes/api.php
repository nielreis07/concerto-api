<?php

use App\Http\Controllers\InstrumentoController;
use App\Http\Controllers\MusicoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'API concerto'], 200);
});

Route::prefix('instrumento')->group(function () {
    Route::get('/', [InstrumentoController::class, 'index'])->name('instrumento.index');
    Route::post('/', [InstrumentoController::class, 'criar'])->name('instrumento.criar');
    Route::put('/{id}', [InstrumentoController::class, 'atualizar'])->name('instrumento.atualizar');
    Route::delete('/{id}', [InstrumentoController::class, 'deletar'])->name('instrumento.deletar');
});

// agrupar api/musico
Route::prefix('musico')->group(function () {
    Route::get('/', [MusicoController::class, 'index'])->name('musico.index');
    Route::get('/{id}', [MusicoController::class, 'exibir'])->name('musico.exibir');
    Route::post('/', [MusicoController::class, 'criar'])->name('musico.criar');
    Route::put('/{id}', [MusicoController::class, 'atualizar'])->name('musico.atualizar');
    Route::delete('/{id}', [MusicoController::class, 'deletar'])->name('musico.deletar');
});