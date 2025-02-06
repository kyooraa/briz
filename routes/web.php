<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ManagementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/lol', function () {
    return view('lol');
})->middleware(['auth', 'verified'])->name('lol');

// Route::get('/perfegement', [ManageController::class, 'create'])->middleware(['auth', 'verified'])->name('perfegement.create');;
// Route::post('/perfegement', [ManageController::class, 'store'])->name('perfegement.store');

Route::get('/management', [ManagementController::class, 'create'])->middleware(['auth', 'verified'])->name('management.create');;
Route::post('/management', [ManagementController::class, 'store'])->name('management.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
