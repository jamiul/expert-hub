<?php

use App\Http\Controllers\Expert\PaymentController;
use App\Http\Controllers\ExpertAnalyticsController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Frontend\Auth\EmailVerificationController;
use App\Http\Controllers\Frontend\Auth\NewPasswordController;
use App\Http\Controllers\Frontend\Auth\PasswordResetLinkController;
use App\Http\Controllers\Frontend\Auth\RegistrationController;
use App\Http\Controllers\Frontend\ClientContractController;
use App\Http\Controllers\Frontend\ClientDashboardController;
use App\Http\Controllers\Frontend\ClientProfileController;
use App\Http\Controllers\Frontend\ClientProjectController;
use App\Http\Controllers\Frontend\ConversationController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\EoiController;
use App\Http\Controllers\Frontend\ExpertContractController;
use App\Http\Controllers\Frontend\ExpertController;
use App\Http\Controllers\Frontend\ExpertDashboardController;
use App\Http\Controllers\Frontend\ExpertEoiController;
use App\Http\Controllers\Frontend\ExpertOfferController;
use App\Http\Controllers\Frontend\ExpertProfileController;
use App\Http\Controllers\Frontend\FindExpertController;
use App\Http\Controllers\Frontend\FindProjectController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ManageEoiController;
use App\Http\Controllers\Frontend\NotificationsController;
use App\Http\Controllers\Frontend\OfferController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ScholarshipController;
use App\Http\Controllers\Frontend\SearchScholarshipController;
use App\Http\Controllers\Frontend\TrainingController;
use App\Http\Controllers\Frontend\TrainingDetailsController;
use App\Http\Controllers\Webhook\StripeController;
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
Route::view('/components/icons', 'icons');
Route::view('/components/widgets', 'sidebar-widget');
Route::view('/components/cards', 'cards');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::view('/terms-of-service', 'terms-of-service')->name('terms-of-service');
Route::view('/user-agreement', 'user-agreement')->name('user-agreement');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');

Route::get('/find-experts', [FindExpertController::class, 'index'])->name('find.experts');
Route::get('/find-experts/professor-michael-kassiou', [ExpertController::class, 'view'])->name('find-experts.details'); //@TODO remove the name
Route::get('/find-trainings', [TrainingController::class, 'index'])->name('find.trainings');
Route::get('/trainings/{training}', [TrainingController::class, 'show'])->name('trainings.show');
Route::get('/training/create', [TrainingController::class, 'create'])->middleware(['auth', 'expert'])->name('training.create');
Route::get('/find-projects', [FindProjectController::class, 'index'])->name('find.projects');
Route::get('/scholarship-database', [ScholarshipController::class, 'index'])->name('scholarship-database');
Route::get('/scholarship-database/{scholarship}', [ScholarshipController::class, 'show'])->name('scholarship-database.show');

Route::get('/auth/registration', [RegistrationController::class, 'index'])->middleware('guest')->name('auth.registration');
Route::get('/auth/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('auth.login');
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->middleware('guest')->name('password.request');
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->middleware('guest')->name('password.reset');
Route::post('/auth/logout', [AuthenticatedSessionController::class, 'logout'])->middleware('auth')->name('auth.logout');
Route::get('/email/verify', [EmailVerificationController::class, 'show'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/resend', [EmailVerificationController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/expert/profile', [ExpertProfileController::class, 'index'])->middleware(['auth', 'expert'])->name('expert.profile.index');
Route::get('/expert/profile/create', [ExpertProfileController::class, 'create'])->middleware(['auth', 'expert'])->name('expert.profile.create');
Route::get('/expert/profile/edit', [ExpertProfileController::class, 'edit'])->middleware(['auth', 'expert'])->name('expert.profile.edit');
Route::get('/expert/profile/{profile}', [ExpertProfileController::class, 'show'])->name('expert.profile.show');
Route::get('/expert/dashboard', [ExpertDashboardController::class, 'index'])->middleware(['auth', 'expert'])->name('expert.dashboard');
Route::get('/expert/eois', [ExpertEoiController::class, 'index'])->middleware(['auth', 'expert'])->name('expert.eois.index');
Route::get('/expert/contracts', [ExpertContractController::class, 'index'])->middleware(['auth', 'expert'])->name('expert.contracts');
Route::get('/expert/analytics', [ExpertAnalyticsController::class, 'index'])->middleware(['auth', 'expert'])->name('expert.analytics');

Route::get('/client/profile', [ClientProfileController::class, 'index'])->middleware(['auth', 'client'])->name('client.profile');
Route::get('/client/profile/edit', [ClientProfileController::class, 'edit'])->middleware(['auth', 'client'])->name('client.profile.edit');
Route::get('/client/profile/current-position', [ClientProfileController::class, 'position'])->middleware(['auth', 'client'])->name('client.profile.position');
Route::get('/client/dashboard', [ClientDashboardController::class, 'index'])->middleware(['auth', 'client'])->name('client.dashboard');
Route::get('/client/projects', [ProjectController::class, 'index'])->middleware(['auth', 'client'])->name('client.projects');
Route::get('/client/projects/{project}/edit', [ProjectController::class, 'edit'])->name('client.projects.edit');
Route::get('/client/projects/{project}/eois', [ManageEoiController::class, 'index'])->middleware(['auth', 'client'])->name('client.eois.index');
Route::get('/client/projects/{project}/eois/{eoi}', [ManageEoiController::class, 'show'])->middleware(['auth', 'client'])->name('client.eois.show');
Route::get('/client/contracts', [ClientContractController::class, 'index'])->middleware(['auth', 'client'])->name('client.contracts');

Route::get('/offers/create/{expert}', [OfferController::class, 'create'])->middleware(['auth', 'client'])->name('offers.create');
Route::get('/offers/{offer}', [OfferController::class, 'show'])->middleware(['auth', 'client'])->name('offers.show');
Route::get('/expert/offers/{offer}/show', [ExpertOfferController::class, 'show'])->middleware(['auth', 'expert'])->name('expert.offer.show');

Route::get('/projects/create', [ProjectController::class, 'create'])->middleware(['auth', 'client'])->name('projects.create');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->middleware('auth')->name('projects.show');
Route::get('/projects/{project}/eoi/create', [EoiController::class, 'create'])->middleware(['auth', 'expert'])->name('eoi.create');

Route::get( '/notifications', [
    NotificationsController::class,
    'notifications'
] )->middleware( [ 'auth' ] )->name('notifications');
Route::get( '/notification-settings', [
    NotificationsController::class,
    'notificationSettings'
] )->middleware( [ 'auth' ] )->name( 'notifications.settings' );

// Nel test
Route::get('/conversation/create/{id}', [ConversationController::class, 'store'])->middleware('auth')->name('conversation.create');
Route::get('/messaging/{id?}', [ConversationController::class, 'index'])->middleware('auth')->name('messaging');
Route::get('/conversation/{conversation_id}', [ConversationController::class, 'showConversation'])->middleware('auth')->name('messaging.conversation');
// Webhooks
Route::group(['prefix' => 'webhooks'], function (){
    Route::post( 'stripe', [StripeController::class, 'receiveWebhook'] );
    Route::post( 'stripe-connect', [StripeController::class, 'receiveConnectWebhook'] );
    Route::any( 'test', [StripeController::class, 'testWebhook'] );
});

Route::group([ 'middleware' => ['auth', 'expert'], 'prefix' => 'expert', 'as' => 'expert.'], function (){
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/billing-report', [PaymentController::class, 'billingReport'])->name('payment.billing');

    //refund make
    Route::get('/payment/refund/{milestone_id}', [PaymentController::class, 'refundMilestone'])->name('payment.refundMilestone');
});

Route::group([ 'middleware' => ['auth', 'client'], 'prefix' => 'client', 'as' => 'client.'], function (){
    Route::any('/pay', [\App\Http\Controllers\Client\PaymentController::class, 'pay'])->name('payment.pay');
    Route::get('/payment', [\App\Http\Controllers\Client\PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/billing-report', [\App\Http\Controllers\Client\PaymentController::class, 'billingReport'])->name('payment.billing');
    Route::post('/payment/create-payment-intent', [\App\Http\Controllers\Client\PaymentController::class, 'createPaymentIntent'])->name('payment.createPaymentIntent');
    Route::post('/payment/create-setup-intent', [\App\Http\Controllers\Client\PaymentController::class, 'createSetupIntent'])->name('payment.createSetupIntent');
    Route::post('/payment/charge-card-off-session', [\App\Http\Controllers\Client\PaymentController::class, 'chargeCardOffsession'])->name('payment.chargeCardOffsession');
});
