<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect()->route('auth.login.show');
    });
    Route::get('/iniciar_sesion', [AuthController::class, 'showLogin'])->name('auth.login.show');
    Route::get('/registro', [AuthController::class, 'showRegister'])->name('auth.register.show');
    Route::get('/recuperar_contrasena', [AuthController::class, 'showForgotPassword'])->name('auth.forgotPassword.show');
});

Route::middleware('auth')->group(function () {
    Route::post('/cerrar_sesion', [AuthController::class, 'logout'])->name('auth.logout');
});