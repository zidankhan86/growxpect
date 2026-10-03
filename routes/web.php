<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Public Website Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/case-studies', [PageController::class, 'caseStudies'])->name('case-studies');
Route::get('/case-studies/{slug}', [PageController::class, 'caseStudyShow'])->name('case-studies.show');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/high-converting-funnels', [PageController::class, 'serviceFunnels'])->name('services.funnels');
Route::get('/services/crm-systems', [PageController::class, 'serviceCrm'])->name('services.crm');
Route::get('/services/ai-automation-appointment-setter', [PageController::class, 'serviceAiAutomation'])->name('services.ai-automation');
Route::get('/services/lead-generation-paid-ads', [PageController::class, 'serviceLeadGeneration'])->name('services.lead-generation');
Route::get('/gohighlevel', [PageController::class, 'gohighlevel'])->name('gohighlevel');
Route::get('/get-gohighlevel', [PageController::class, 'gohighlevel'])->name('get-gohighlevel');
Route::get('/booked-slots', [BookingController::class, 'getBookedSlots'])->name('booking.slots');
Route::post('/book-strategy-call', [BookingController::class, 'store'])->name('booking.store');

