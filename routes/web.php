<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Public Website Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/case-studies', [PageController::class, 'caseStudies'])->name('case-studies');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::post('/book-strategy-call', [BookingController::class, 'store'])->name('booking.store');
