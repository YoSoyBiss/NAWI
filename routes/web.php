<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/registro', [AuthController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [AuthController::class, 'register']);

//Route::get('/Recuperar_contraseña', [AuthController::class, 'showForgotPasswordForm'])->name('Recuperar_contraseña');
//Route::post('/Recuperar_contraseña', [AuthController::class, 'sendPasswordResetLink']);


// Muestra el formulario para solicitar el enlace de recuperación de contraseña
Route::get('/Recuperar_contraseña', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');

// Envía el enlace de recuperación de contraseña
Route::post('/Recuperar_contraseña', [AuthController::class, 'sendPasswordResetLink'])->name('password.email');

// Muestra el formulario para restablecer la contraseña
Route::get('/resetear_contraseña/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');

// Maneja el restablecimiento de la contraseña
Route::post('/resetear_contraseña', [AuthController::class, 'resetPassword'])->name('password.update');


Route::get('/', function () {
    return view('welcome');
});
