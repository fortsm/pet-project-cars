<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/{id}', [UserController::class, 'show']);

    Route::get('/cars', [CarController::class, 'index'])->name('cars');
    Route::get('/cars/{id}', [CarController::class, 'show']);

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/categories/{id}', [CategoryController::class, 'show']);

    Route::get('/drivers', [DriverController::class, 'index'])->name('drivers');
    Route::get('/drivers/{id}', [DriverController::class, 'show']);

    Route::get('/trips', [TripController::class, 'index'])->name('trips');
    Route::get('/trips/create', [TripController::class, 'create']);
    Route::post('/trips/store', [TripController::class, 'store'])->name('trips.store');
    Route::get('/trips/{id}', [TripController::class, 'show']);
});

require __DIR__ . '/auth.php';
