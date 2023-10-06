<?php

use App\Http\Controllers\AizUploadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\BiddingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookmarkedFreelancerController;
use App\Http\Controllers\BookmarkedScholarshipController;
use App\Http\Controllers\BookmarkedServiceController;
use App\Http\Controllers\CancelProjectController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\FreelancerAccountController;
use App\Http\Controllers\FreelancerEducationController;
use App\Http\Controllers\HireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MilestonePaymentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackagePaymentController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\WhyScholarshipController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

//consultant Registration
Route::get('/consultant-login', [DemoController::class, 'consultantLogin']);
Route::get('/consultant-signup', [DemoController::class, 'consultantSignup']);
Route::get('/verify-email', [DemoController::class, 'consultantVerifyEmail']);
Route::get('/verify-your-email', [DemoController::class, 'consultantVerifyYourEmail']);
Route::get('/profile-setup', [DemoController::class, 'profileSetup']);
Route::get('/profile-details', [DemoController::class, 'profileDetails']);
Route::get('/profile-expertises', [DemoController::class, 'profileExpertises']);
Route::get('/profile-education', [DemoController::class, 'profileEducation']);
Route::get('/profile-consultation', [DemoController::class, 'profileConsultation']);
Route::get('/profile-consultation-books', [DemoController::class, 'profileConsultationBooks']);
Route::get('/profile-consultation-interview', [DemoController::class, 'profileConsultationInterview']);
Route::get('/profile-biography', [DemoController::class, 'profileBiography']);
Route::get('/profile-picture', [DemoController::class, 'profilePicture']);
Route::get('/profile-completed', [DemoController::class, 'profileCompleted']);
Route::get('/profile-expertises-popup', [DemoController::class, 'profileExpertisesPopup']);

//client Registration
Route::get('/client-login', [DemoController::class, 'clientLogin']);
Route::get('/client-signup', [DemoController::class, 'clientSignup']);
Route::get('/client-verify-email', [DemoController::class, 'clientVerifyEmail']);
Route::get('/client-verify-your-email', [DemoController::class, 'clientVerifyYourEmail']);

Route::group(['prefix' => 'aiz-uploader'], function () {
    Route::post('/', [AizUploadController::class, 'showUploader']);
    Route::post('/upload', [AizUploadController::class, 'upload']);
    Route::get('/get_uploaded_files', [AizUploadController::class, 'getUploadedFiles']);
    Route::delete('/destroy/{id}', [AizUploadController::class, 'destroy']);
    Route::post('/get_file_by_ids', [AizUploadController::class, 'getPreviewFiles']);
    Route::get('/download/{id}', [AizUploadController::class, 'attachmentDownload'])->name('download_attachment');
});

// Registration with mail
Route::get('/register/{code}', [RegisterController::class, 'showRegistrationForm']);

// Subscribe
Route::resource('subscribers', SubscriberController::class);

Auth::routes(['verify' => true]);
Route::get('/verification-confirmation/{code}', [VerificationController::class, 'verificationConfirmation'])->name('email.verification.confirmation');

Route::get('/admin/login', [HomeController::class, 'adminLogin'])->name('admin.login');
Route::get('/users/login', [HomeController::class, 'login'])->name('user.login');

//Social
Route::get('/social-login/redirect/{provider}', [LoginController::class, 'redirectToProvider'])->name('social.login');
Route::get('/social-login/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/language/{locale}', [LanguageController::class, 'changeLanguage'])->name('language.change');
Route::get('/package-select', [PackageController::class, 'selectPackage'])->name('select_package');
Route::get('/check', [UserController::class, 'userOnlineStatus']);

Route::post('/user-name-check', 'HomeController@user_name_check')->name('user_name_check');
Route::post('/cities/get_city_by_country', 'CityController@get_city_by_country')->name('cities.get_city_by_country');

Route::post('/user-account-type', 'UserController@set_account_type')->name('user.account.type');

// find job section
Route::get('/ways-to-earn', [StaticPageController::class, 'waysToEarn'])->name('ways-to-earn');
Route::get('/promote', [StaticPageController::class, 'promote'])->name('promote');
Route::get('/send-proposal', [StaticPageController::class, 'sendProposal'])->name('send-proposal');
Route::get('/badge', [StaticPageController::class, 'badge'])->name('badge');
Route::get('/proposal', [StaticPageController::class, 'proposal'])->name('proposal');
Route::get('/skills', [StaticPageController::class, 'skills'])->name('skills');
Route::get('/success-stories', [StaticPageController::class, 'successStories'])->name('success-stories');

//Blog Section
Route::get('/blog', [BlogController::class, 'allBlog'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'blogDetails'])->name('blog.details');

//why scholarships
Route::get('/review', [WhyScholarshipController::class, 'whyScholarshipReview'])->name('review');
Route::get('/about-us', [WhyScholarshipController::class, 'whyFreelancerEdu'])->name('about-us');
Route::get('/how-to-hire', [WhyScholarshipController::class, 'whyScholarshipHowToHire'])->name('how-to-hire');
Route::get('/how-to-find-job', [WhyScholarshipController::class, 'whyScholarshipHowToFindJob'])->name('how-to-find-job');

Route::group(['middleware' => ['user']], function () {
    Route::group(['prefix' => 'package'], function () {
        Route::post('/get-package-purchase-modal', [PackageController::class, 'getPackagePurchaseModal'])->name('get_package_purchase_modal');
        Route::get('/free-package-purchase/{id}', [PackageController::class, 'packagePurchaseFree'])->name('package_purchase_free');
        Route::post('/get-package-purchase-modal', [PackageController::class, 'getBidModal'])->name('get_bid_for_project_modal');
    });

    //Purchase PackagePayment
    Route::post('purchase-package/payment', [PackagePaymentController::class, 'purchasePackage'])->name('purchase_package');
    Route::get('send-verification-request', [HomeController::class, 'sendEmailVerificationRequest'])->name('email.verification');
    Route::get('verification-confirmation/{code}', [HomeController::class, 'verificationConfirmation'])->name('email.verification.confirmation');
});

Route::group(['middleware' => ['user', 'verified', 'packagePurchased']], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::group(['prefix' => 'projects'], function () {
        Route::get('/running-project', [ProjectController::class, 'myRunningProject'])->name('projects.my_running_project');
        Route::get('/completed-project', [ProjectController::class, 'myCompletedProject'])->name('projects.my_completed_project');
        Route::get('/cancelled-project', [ProjectController::class, 'myCancelledProject'])->name('projects.my_cancelled_project');
        Route::get('/cancel-project-request/{id}', [ProjectController::class, 'projectCancel'])->name('projects.cancel');
    });

    Route::group(['prefix' => 'profile-settings'], function () {
        Route::get('/', [ProfileController::class, 'userProfile'])->name('user.profile');
        Route::post('/basic-info-update', [ProfileController::class, 'basicInfoUpdate'])->name('user_profile.basic_info_update');
        Route::post('/photo-update', [ProfileController::class, 'photoUpdate'])->name('user_profile.photo_update');
        Route::post('/bio-update', [ProfileController::class, 'bioUpdate'])->name('user_profile.bio_update');
        Route::post('/verification-update', [VerificationController::class, 'verificationConfirmation'])->name('user_profile.verification_store');
    });

    Route::post('cancel-project-request/store', [CancelProjectController::class, 'store'])->name('cancel-project-request.store');


    Route::post('/interview-chat', [ChatController::class, 'index'])->name('call_for_interview');
    Route::post('/chat-reply', [ChatController::class, 'chatReply'])->name('chat.reply');
    Route::get('/chat', [ChatController::class, 'chatIndex'])->name('all.messages');
    Route::get('/single-chat/{id}', [ChatController::class, 'chatView'])->name('chat_view');
    Route::get('/chat/refresh/{id}', [ChatController::class, 'chatRefresh'])->name('chat_refresh');
    Route::post('/chat/old-messages', [ChatController::class, 'getOldMessages'])->name('get-old-message');

    //hire from interview
    Route::get('/hiring-invitation/reject{id}', [HireController::class, 'reject'])->name('hiring.reject');
    Route::post('/hiring-confirmation-store', [HireController::class, 'hire'])->name('hiring_confirmation_store');

    //milestone message showing exampleModalLabel
    Route::post('/milestone-requests-message', [MilestonePaymentController::class, 'milestoneRequestMessage'])->name('milestone_request_message_show_modal');

    //walletController
    Route::resource('wallet', WalletController::class);
    Route::post('wallet-recharge', [WalletController::class, 'rechage'])->name('wallet.recharge');

    Route::get('/freelancer/packages/history', [PackagePaymentController::class, 'freelancerPackagePurchaseHistoryIndex'])->name('freelancer.packages.history');
    Route::get('/client/packages/history', [PackagePaymentController::class, 'freelancerPackagePurchaseHistoryIndex'])->name('client.packages.history');

    Route::get('/user-reviews/{type}', [ReviewController::class, 'reviewIndex'])->name('user_review');

    //reviews
    Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');
    Route::get('/notifications', [NotificationController::class, 'frontendListing'])->name('frontend.notifications');
});

// Client middleware
Route::group(['middleware' => ['auth', 'verified', 'client', 'packagePurchased']], function () {
    Route::resource('/projects', ProjectController::class);
    Route::get('/my-open-projects', [ProjectController::class, 'myOpenProject'])->name('projects.my_open_project');
    Route::get('/project-bids/{slug}', [ProjectController::class, 'projectBids'])->name('project.bids');
    Route::get('/invition-for-hire-freelancer/{username}', [HireController::class, 'freelancerInvitation'])->name('invition_for_hire_freelancer');
    Route::post('/invition-for-hire-freelancer/store', [HireController::class, 'store'])->name('invition_for_hire_freelancer_sent');

    //Milestone payment
    Route::get('/recieved-milestone-requests', [MilestonePaymentController::class, 'recievedMilestoneRequestIndex'])->name('milestone-requests.all');
    Route::post('/milestone-payment-select-modal', [MilestonePaymentController::class, 'showPaymentSelectModal'])->name('show_payment_select_modal');
    Route::post('/milestone-payment', [MilestonePaymentController::class, 'index'])->name('milestone.pay_to_admin');

    //project completed
    Route::get('/project-done/{id}', [ProjectController::class, 'projectDone'])->name('projects.complete');
    Route::resource('bookmarked-freelancers', BookmarkedFreelancerController::class);
    Route::get('/client/purchased-services', [ServiceController::class, 'clientPurchasedServices'])->name('client.purchased.services');

    Route::get('/service/{id}/cancel', [ServiceController::class, 'cancelService'])->name('services.cancel');
    Route::post('/service/cancel/store', [ServiceController::class, 'cancelServiceStore'])->name('services.cancel.store');

    Route::get('/client/cancel-requests-services', [ServiceController::class, 'clientCancelRequestedServices'])->name('client.services.cancel.requests');
    Route::get('/client/cancelled-services', [ServiceController::class, 'clientCancelledServices'])->name('client.services.cancelled');
});

Route::resource('bookmarked-scholarships', BookmarkedScholarshipController::class);
Route::resource('bookmarked-services', BookmarkedServiceController::class);

Route::group(['prefix' => 'service'], function () {
    Route::get('/show/{slug}', [ServiceController::class, 'show'])->name('service.show');
    Route::post('/package', [ServiceController::class, 'getServicePackagePurchaseModal'])->name('get_package_service_modal');
    Route::post('/package-purchase', [ServiceController::class, 'purchaseServicePackage'])->name('purchase_service_package');
});

// Freelancer middleware
Route::group(['middleware' => ['auth', 'verified', 'freelancer', 'packagePurchased']], function () {
    Route::post('/bids/store', [BiddingController::class, 'store'])->name('bids.store');
    Route::get('/account-settings', [ProfileController::class, 'userAccount'])->name('user.account');

    Route::group(['prefix' => 'profile-settings'], function () {
        Route::post('/portfolio-add', [PortfolioController::class, 'store'])->name('user_profile.portfolio_add');
        Route::get('/portfolio-edit/{id}', [PortfolioController::class, 'edit'])->name('user_profile.portfolio_edit');
        Route::post('/portfolio-update/{id}', [PortfolioController::class, 'update'])->name('user_profile.portfolio_update');
        Route::get('/portfolio-delete/{id}', [PortfolioController::class, 'destroy'])->name('user_profile.portfolio_destroy');
        Route::post('/work-experience-add', [WorkExperienceController::class, 'store'])->name('user_profile.work_experience_add');
        Route::get('/work-experience-edit/{id}', [WorkExperienceController::class, 'edit'])->name('user_profile.work_experience_edit');
        Route::post('/work-experience-update/{id}', [WorkExperienceController::class, 'update'])->name('user_profile.work_experience_update');
        Route::get('/work-experience-delete/{id}', [WorkExperienceController::class, 'destroy'])->name('user_profile.work_experience_destroy');
        Route::post('/education-info-add', [FreelancerEducationController::class, 'store'])->name('user_profile.education_info_add');
        Route::get('/education-info-edit/{id}', [FreelancerEducationController::class, 'edit'])->name('user_profile.education_info_edit');
        Route::post('/education-info-update/{id}', [FreelancerEducationController::class, 'update'])->name('user_profile.education_info_update');
        Route::get('/education-info-delete/{id}', [FreelancerEducationController::class, 'destroy'])->name('user_profile.education_info_destroy');
    });

    Route::group(['prefix' => 'service'], function () {
        Route::get('//create', [ServiceController::class, 'create'])->name('service.create');
        Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
        Route::get('/edit/{slug}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::post('/update/{slug}', [ServiceController::class, 'update'])->name('service.update');
        Route::get('/destroy/{slug}', [ServiceController::class, 'destroy'])->name('service.destroy');
    });

    Route::post('/freelancer-account-info/store', [FreelancerAccountController::class, 'store'])->name('freelancer_account.store');
    Route::get('/bidded-projects', [ProjectController::class, 'biddedProjects'])->name('bidded_projects');
    Route::get('/private-projects', [HireController::class, 'privateProjects'])->name('private_projects');

    //Milestone payment request sending cancel_modal
    Route::post('/partial-payment-modal', [MilestonePaymentController::class, 'requestModal'])->name('milestone_payment_request.modal');
    Route::post('/partial-payment-request-store', [MilestonePaymentController::class, 'requestStore'])->name('partial_payment_request');
    Route::get('/sent-milestone-requests', [MilestonePaymentController::class, 'sentMilestoneRequestIndex'])->name('sent-milestone-requests.all');
    Route::get('/recieved-milestone-payment', [MilestonePaymentController::class, 'recieved_milestone_payment_index'])->name('recieved_milestone_payment_index');

    //payment history
    Route::get('/send-withdrawal-request', 'PaytoFreelancerController@send_withdrawal_request_index')->name('send_withdrawal_request_to_admin');
    Route::get('/withdrawal-history', 'PaytoFreelancerController@withdrawal_history_index')->name('withdrawal_history_index');
    Route::post('/send-withdrawal-request/store', 'PaytoFreelancerController@send_withdrawal_request_store')->name('store_withdrawal_request_to_admin');

    Route::resource('bookmarked-projects', 'BookmarkedProjectController');
    Route::get('/following-clients', 'BookmarkedClientController@index')->name('bookmarked-clients.index');
    Route::get('/following-clients/store/{id}', 'BookmarkedClientController@store')->name('bookmarked-clients.store');
    Route::get('/following-clients/destroy/{id}', 'BookmarkedClientController@destroy')->name('bookmarked-clients.destroy');

    Route::get('/services', 'ServiceController@freelancer_index')->name('service.freelancer_index');
    Route::get('services/purchased', 'ServiceController@sold_services')->name('service.sold');

});
// seminar consultant resource route
Route::resource('seminar-consultant', 'SeminarConsultantController');

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::get('/search?category_id[]={id}&type=project', 'SearchController@index')->name('projects.category');
Route::get('/skill/{skill}/{type}', 'SearchController@searchBySkill')->name('search.skill');
Route::get('/search?category={category_slug}&type=service', 'SearchController@index')->name('search.category');
Route::get('/search?category_id[]={category_id}&type=freelancer', 'SearchController@index')->name('freelancer.category');

//scholarship list
Route::get('/scholarship-search', 'SearchScholarshipController@index')->name('scholarship-search');
Route::get('/skills/{skill}/{type}', 'SearchScholarshipController@searchBySkill')->name('scholarship-search.skill');
Route::get('/scholarship-search?category={category_slug}&type=service', 'SearchScholarshipController@index')->name('services.category');

Route::get('/project/{slug}', 'HomeController@project_details')->name('project.details');
Route::get('/private-project-details/{slug}', 'HomeController@private_project_details')->name('private_project.details');

Route::get('/project-lists', 'HomeController@all_projects')->name('projects.list');

Route::get('/client/{user_name}', 'HomeController@client_details')->name('client.details');
Route::get('/client-lists', 'HomeController@client_list')->name('client.lists');

Route::get('/freelancer-lists', 'HomeController@freelancer_list')->name('freelancer.lists');
Route::get('/freelancer/{user_name}', [HomeController::class, 'freelancer_details'])->name('freelancer.details');
// Route::get('/freelancer/{user_name}', 'HomeController@freelancer_meeting')->name('freelancer.meeting');
Route::get('/get_freelancer_skills', 'SkillController@freelancer_skills')->name('get_freelancer_skills');

//seminars

Route::get('seminar/{id}', 'SeminarDetailsController@seminar_details')->name('seminar.details');
//Payments

//STRIPE
Route::get('/stripe', 'StripePaymentController@index');
Route::post('/stripe/create-checkout-session', 'StripePaymentController@create_checkout_session')->name('stripe.get_token');
Route::any('/stripe/payment/callback', 'StripePaymentController@callback')->name('stripe.callback');
Route::get('/stripe/success', 'StripePaymentController@success')->name('stripe.success');
Route::get('/stripe/cancel', 'StripePaymentController@cancel')->name('stripe.cancel');

Route::get('/{slug}', 'PageController@show_custom_page')->name('custom-pages.show_custom_page');
