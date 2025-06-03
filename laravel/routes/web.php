<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('registration.form');
Route::post('/register', [AuthController::class, 'register'])->name('registration.submit');
