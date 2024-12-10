<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NarrativeController;
use App\Http\Controllers\ExerciseController;


Route::get('/CRUD', [NarrativeController::class, 'indexCRUD']);
Route::get('/CRUD_Cuestionario', function () {
    return view('CRUD_Cuestionario');
});



Route::get('/cuentos', [NarrativeController::class, 'index']);
Route::get('/leyendas/{id}', [NarrativeController::class, 'show'])->name('narratives.show');

// Ruta para listar todos los cuestionarios
Route::get('/Actividades', [ExerciseController::class, 'index'])->name('exercises.index');

// Ruta para ver un cuestionario específico
Route::get('/ejercicio/{id}', [ExerciseController::class, 'show'])->name('exercises.show');
Route::post('/ejercicio/{id}/submit', [ExerciseController::class, 'submit'])->name('exercises.submit');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);



Route::get('/registro', [AuthController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [AuthController::class, 'register']);

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

Route::get('/home', function () {
    return view('home');
});


Route::get('/', function () {
    return view('welcome');
});



