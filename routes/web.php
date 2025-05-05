<?php

use App\Http\Controllers\userController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [userController::class, 'showLogin'])->name('user.login');

Route::get('/registro', [userController::class, 'showRegister'])->name('user.register');
