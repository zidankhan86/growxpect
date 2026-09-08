<?php

use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseClassController;
use App\Http\Controllers\Admin\HomepageCmsController;
use App\Http\Controllers\Admin\CustomPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingsController as AdminSettingsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PaymentGatewayController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\EnrollmentController;
use App\Http\Controllers\Admin\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ====================Admin Authentication=========================

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Show login form
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('login');

    // Handle login submission
    Route::post('login', [AdminLoginController::class, 'login'])->name('login.submit');

    // Handle logout
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');
});

Route::redirect('/admin', '/admin/dashboard');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth:admin'], 'where' => ['locale' => '[a-zA-Z]{2}']], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/cc', [DashboardController::class, 'cacheClear'])->name('cacheClear');

    // Admin Setting
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('general', [AdminSettingsController::class, 'general'])->name('general');
        Route::post('general/store', [AdminSettingsController::class, 'generalStore'])->name('general_store');
    });

    Route::get('ajax/text-editor/image', ['as' => 'text-editor.image', 'uses' => 'CustomPageController@postEditorImageUpload']);
    // Custom Page
    Route::group(['prefix' => 'cpage', 'as' => 'cpage.'], function () {
        Route::get('/', [CustomPageController::class, 'index'])->name('index');
        Route::get('{id}/view', [CustomPageController::class, 'view'])->name('view');
        Route::get('{id}/edit', [CustomPageController::class, 'edit'])->name('edit');
        Route::post('{id}/update', [CustomPageController::class, 'update'])->name('update');
    });



    // Users (admin users)
    Route::group(['prefix' => 'admins', 'as' => 'user.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('store', [UserController::class, 'store'])->name('store');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('edit');
        Route::get('{id}/password-edit', [UserController::class, 'passwordEdit'])->name('password.edit');
        Route::post('{id}/password-update', [UserController::class, 'passwordUpdate'])->name('password.update');
        Route::post('{id}/update', [UserController::class, 'update'])->name('update');
    });



    // admin profile
    Route::get('profile', [DashboardController::class, 'adminProfile'])->name('profile');
    Route::get('profile-edit', [DashboardController::class, 'profileEdit'])->name('profile.edit');
    Route::post('profile-update', [DashboardController::class, 'profileUpdate'])->name('profile.update');
    Route::post('password-update', [DashboardController::class, 'passwordUpdate'])->name('password.update');




    // Front Users (registered users list)
    Route::get('users', [CustomerController::class, 'index'])->name('front-users.index');


    // Seo
    Route::group(['prefix' => 'seo', 'as' => 'seo.'], function () {
        Route::get('/', [SeoController::class, 'index'])->name('index');
        Route::get('{id}/edit', [SeoController::class, 'edit'])->name('edit');
        Route::post('{id}/update', [SeoController::class, 'update'])->name('update');
        Route::get('{id}/view', [SeoController::class, 'view'])->name('view');
    });

    // Homepage CMS
    Route::group(['prefix' => 'cms', 'as' => 'cms.'], function () {
        Route::get('manage',              [HomepageCmsController::class, 'manage'])->name('manage');
        Route::post('hero',               [HomepageCmsController::class, 'updateHero'])->name('hero.update');
        Route::post('social-proof',       [HomepageCmsController::class, 'updateSocialProof'])->name('social-proof.update');
        Route::post('proof-gallery',      [HomepageCmsController::class, 'updateProofGallery'])->name('proof-gallery.update');
        Route::post('challenge-details',  [HomepageCmsController::class, 'updateChallengeDetails'])->name('challenge-details.update');
        Route::post('course-module',      [HomepageCmsController::class, 'updateCourseModule'])->name('course-module.update');
        Route::post('why-listen',         [HomepageCmsController::class, 'updateWhyListen'])->name('why-listen.update');
        Route::post('footer',             [HomepageCmsController::class, 'updateFooter'])->name('footer.update');
        Route::post('update',             [HomepageCmsController::class, 'updateCms'])->name('update');

    });

});
