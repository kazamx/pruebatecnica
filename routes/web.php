<?php

use App\Http\Controllers\PalabrasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formulario');
})->name('formulario');



Route::post('/palabras',PalabrasController::class)->name('palabras');