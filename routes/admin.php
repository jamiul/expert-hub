<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ScholarshipController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function () {
    route::get('/login', [AdminController::class, 'loginForm'])->name('login');
    route::get('/projects', [AdminController::class, 'projectList'])->name('projects');
    route::get('/clients', [AdminController::class, 'clientList'])->name('clients');
    route::get('/experts', [AdminController::class, 'expertList'])->name('experts');
    route::get('/home-page', [AdminController::class, 'homePage'])->name('homePage');
    route::get('/about-us', [AdminController::class, 'aboutUs'])->name('aboutUs');
    route::get('/project-payment', [AdminController::class, 'projectPayment'])->name('projectPayment');
    route::get('/reviews', [AdminController::class, 'reviewList'])->name('reviews');

    Route::get('/scholarships', [ScholarshipController::class, 'index'])->name('scholarships.index');

    Route::get('/notifications', [AdminController::class, 'notifications'])->middleware(['auth'])->name('notifications');
});
