<?php

use App\Http\Controllers\LoanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Default welcome page
Route::get('/', function () {
    return view('welcome');
});

// Loan-related routes
Route::get('/loan-form', [LoanController::class, 'showForm'])->name('loan.form'); // Show loan form
Route::post('/loan-form', [LoanController::class, 'store'])->name('loan.store'); // Process loan form and show result
Route::get('/loan-result', function () {
    return redirect('/'); // Redirect if someone manually accesses /loan-result
});

// Dashboard and profile routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__.'/auth.php';
