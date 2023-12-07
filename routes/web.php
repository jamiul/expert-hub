<?php

use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Frontend\Auth\EmailVerificationController;
use App\Http\Controllers\Frontend\Auth\RegistrationController;
use App\Http\Controllers\Frontend\ConsultantController;
use App\Http\Controllers\Frontend\ExpertController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ScholarshipController;
use App\Http\Controllers\Frontend\SearchScholarshipController;
use App\Http\Controllers\Frontend\TrainingController;
use App\Http\Controllers\Frontend\TrainingDetailsController;
use App\Http\Controllers\Frontend\UserProfileController;
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

Route::view('/components', 'components');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/find-consultant', [ConsultantController::class, 'index'])->name('consultant');

Route::get('/find-consultant/professor-michael-kassiou', [ConsultantController::class, 'view'])->name('consultant.details'); //@TODO remove the name
Route::get('/find-experts', [ExpertController::class, 'index'])->name('find.experts');
Route::get('/find-experts/professor-michael-kassiou', [ExpertController::class, 'view'])->name('find-experts.details'); //@TODO remove the name
Route::get('/find-training', [TrainingController::class, 'index'])->name('find-training.index');
Route::get('/find-training/{slug}', [TrainingController::class, 'details'])->name('find-training.details');
Route::get('/find-projects', [ProjectController::class, 'index'])->name('project');
Route::get('/find-details', [ProjectController::class, 'projectDetails'])->name('project-details');
Route::get('/scholarship-database', [ScholarshipController::class, 'scholarshipDatabase'])->name('scholarship-database');

Route::get('/auth/registration', [RegistrationController::class, 'index'])->middleware('guest')->name('auth.registration');
Route::get('/auth/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('auth.login');
Route::post('/auth/logout', [AuthenticatedSessionController::class, 'logout'])->middleware('auth')->name('auth.logout');
Route::get('/email/verify', [EmailVerificationController::class, 'show'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/resend', [EmailVerificationController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/profile', [UserProfileController::class, 'index'])->middleware(['auth'])->name('profile.index');
Route::get('/profile/create', [UserProfileController::class, 'create'])->middleware(['auth'])->name('profile.create');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/projects/create', [ProjectController::class, 'create'])->middleware('auth')->name('projects.create');

//scholarship list
Route::get('/scholarship-search', [SearchScholarshipController::class, 'index'])->name('scholarship-search');
Route::get('/skills/{skill}/{type}', [SearchScholarshipController::class, 'searchBySkill'])->name('scholarship-search.skill');
Route::get('/scholarship-search?category={category_slug}&type=service', [SearchScholarshipController::class, 'index'])->name('services.category');

//trainings
Route::get('training/{id}', [TrainingDetailsController::class, 'trainingDetails'])->name('training.details');
