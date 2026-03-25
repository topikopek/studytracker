<?php

use App\Http\Controllers\BookDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [BookDashboardController::class, 'index'])->name('dashboard');
    Route::get('/module/{module}/done', [BookDashboardController::class, 'done']);
    Route::get('/books', fn() => view('dashboard.books'))->name('books');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
