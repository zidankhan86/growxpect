<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\EnrollmentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Public Home / Courses
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy-policy');
Route::get('/terms-condition', [HomeController::class, 'terms'])->name('terms-condition');
Route::get('/vidoes', [HomeController::class, 'allVideos'])->name('video.list');
Route::get('/reflection/detials/{id}', [HomeController::class, 'reflectionDetials'])->name('reflection.detials');
Route::get('/share/reflection/', [HomeController::class, 'shareReflection'])->name('share.reflection');


Route::prefix('user')->as('user.')->middleware('auth')->group(function () {
    // Dashboard Home
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('/dashboard/profile', [DashboardController::class, 'updateProfile'])->name('profile.update');

    // Password Update
    Route::get('/dashboard/password', [DashboardController::class, 'passwordForm'])->name('password');
    Route::post('/dashboard/password', [DashboardController::class, 'updatePassword'])->name('password.update');

    // User Courses
    // Route::get('/dashboard/courses', [DashboardController::class, 'myCourses'])->name('courses');
});


Route::get('/enrollment/pay', [EnrollmentController::class, 'pay'])->name('enrollment.pay');
Route::get('/enrollment/callback/success', [EnrollmentController::class, 'successCallback'])->name('enrollment.callback.success');
Route::get('/enrollment/callback/failed',  [EnrollmentController::class, 'failedCallback'])->name('enrollment.callback.failed');
Route::get('/enrollment/callback/cancel',  [EnrollmentController::class, 'cancelCallback'])->name('enrollment.callback.cancel');