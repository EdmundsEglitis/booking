<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\BookingController; 
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\admin;



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
    Route::get('/bookings', [BookingController::class, 'viewBookings'])->name('bookings');
    Route::get('/view/{id}', [BookingController::class, 'view']);
    Route::get('/show', [BookingController::class, 'edit']);
    Route::get('/admin', [AdminController::class, 'admin']);
    Route::get('/add-room', [AdminController::class, 'showAddRoom'])->name('add-room');
    Route::post('/add-room', [AdminController::class, 'roomStore'])->name('room-store');
    
});



require __DIR__.'/auth.php';
