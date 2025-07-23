<?php

use App\Http\Controllers\DocumentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login-admin/index');
});

Route::get('/empresa', function () {
    return view('login-usuario/index');
});

///ejemplo


Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos.index');

