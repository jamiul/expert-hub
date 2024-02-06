<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ScholarshipController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('admin.guest:admin')->name('admin.login');
Route::middleware(['admin.auth:admin'])->name('admin.')->group(function(){
    Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    route::get('/projects', [AdminController::class, 'projectList'])->name('projects');
    route::get('/clients', [AdminController::class, 'clientList'])->name('clients');
    route::get('/experts', [AdminController::class, 'expertList'])->name('experts');
    route::get('/home-page', [AdminController::class, 'homePage'])->name('homePage');
    route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
    route::get('/project-payment', [AdminController::class, 'projectPayment'])->name('projectPayment');
    route::get('/reviews', [AdminController::class, 'reviewList'])->name('reviews');

    Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');
    Route::get('/scholarships', [ScholarshipController::class, 'index'])->name('scholarships.index');
});

Route::group( [ 'middleware' => [ 'auth' ], 'prefix' => 'admin', 'as' => 'admin.' ], function () {
    Route::get( '/notifications', [ AdminController::class, 'notifications' ] )->name( 'notifications' );
} );
