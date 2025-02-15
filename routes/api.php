<?php

use App\Http\Controllers\CepController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/search/local/{ceps}', [CepController::class, 'searchLocal'])->name('cepSearchLocal')->name('cep.searchLocal');
