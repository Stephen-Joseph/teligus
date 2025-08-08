<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IspController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'showdashboard'])->name('dashboard');

Route::get('/isp', [IspController::class, 'showisp'])->name('isp');

Route::get('/operators', [OperatorController::class, 'showoperators'])->name('operators');

Route::get('/users', [UserController::class, 'showusers'])->name('users');

Route::get('/plan', [PlanController::class, 'showplan'])->name('plan');