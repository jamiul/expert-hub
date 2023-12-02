<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Frontend\AizUploadController;
use App\Http\Controllers\Frontend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Frontend\Auth\EmailVerificationController;
use App\Http\Controllers\Frontend\Auth\RegistrationController;
use App\Http\Controllers\Frontend\BiddingController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BookmarkedClientController;
use App\Http\Controllers\Frontend\BookmarkedExpertController;
use App\Http\Controllers\Frontend\BookmarkedProjectController;
use App\Http\Controllers\Frontend\BookmarkedScholarshipController;
use App\Http\Controllers\Frontend\BookmarkedServiceController;
use App\Http\Controllers\Frontend\CancelProjectController;
use App\Http\Controllers\Frontend\ChatController;
use App\Http\Controllers\Frontend\CityController;
use App\Http\Controllers\Frontend\ClientController;
use App\Http\Controllers\Frontend\ConsultantController;
use App\Http\Controllers\Frontend\ExpertAccountController;
use App\Http\Controllers\Frontend\ExpertController;
use App\Http\Controllers\Frontend\ExpertEducationController;
use App\Http\Controllers\Frontend\HireController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\MilestonePaymentController;
use App\Http\Controllers\Frontend\NotificationController;
use App\Http\Controllers\Frontend\PackageController;
use App\Http\Controllers\Frontend\PackagePaymentController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PaytoExpertController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\ScholarshipController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\SearchScholarshipController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\StaticPageController;
use App\Http\Controllers\Frontend\StripePaymentController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\Frontend\TrainingConsultantController;
use App\Http\Controllers\Frontend\TrainingController;
use App\Http\Controllers\Frontend\TrainingDetailsController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\WalletController;
use App\Http\Controllers\Frontend\WhyScholarshipController;
use App\Http\Controllers\Frontend\WorkExperienceController;
use Illuminate\Support\Facades\Auth;
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
Route::view('/test','test');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
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
