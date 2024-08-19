<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/registro', [AuthController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [AuthController::class, 'register']);

Route::get('/Recuperar_contraseña', [AuthController::class, 'showForgotPasswordForm'])->name('Recuperar_contraseña');
Route::post('/Recuperar_contraseña', [AuthController::class, 'sendPasswordResetLink']);

Route::get('/', function () {
    return view('welcome');
});
