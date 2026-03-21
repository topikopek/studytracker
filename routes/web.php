<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/books', function () {
    return view('dashboard.books');
})->middleware(['auth', 'verified'])->name('books');
Route::get('/schedule', function () {
    return view('dashboard.schedule');
})->middleware(['auth', 'verified'])->name('schedule');

// Route::middleware(['auth', 'verified'])->group(function(){

// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
