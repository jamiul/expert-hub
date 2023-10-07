<?php
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\AddonController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AizUploadController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CancelProjectController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ConsultantCategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\EmailConfigurationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\GeneralConfigurationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MilestonePaymentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackagePaymentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PageOptimizationController;
use App\Http\Controllers\PaytoFreelancerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ScholarshipCategoryController;
use App\Http\Controllers\ScholarshipCityController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ScholarshipCountryController;
use App\Http\Controllers\ScholarshipFieldStudyController;
use App\Http\Controllers\ScholarshipLevelController;
use App\Http\Controllers\ScholarshipQualificationController;
use App\Http\Controllers\ScholarshipUniversityController;
use App\Http\Controllers\ScholarshipWhoCanApplyController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\SeminarModeController;
use App\Http\Controllers\SeminarSoftwareController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicePaymentController;
use App\Http\Controllers\SitePagesController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SystemConfigurationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\WalletController;

Route::get('/admin', [HomeController::class, 'adminDashboard'])
    ->name('admin.dashboard')
    ->middleware(['admin']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('profile', [ProfileController::class, 'adminProfile'])->name('admin.profile');

    Route::get('/project-categories/destroy/{id}', [ProjectCategoryController::class, 'destroy'])->name('project-categories.delete');
    Route::post('profile-update', [ProfileController::class, 'updateAdminProfile'])->name('admin_profile.update');

    Route::resource('/project-categories', ProjectCategoryController::class);

    Route::resource('skills', SkillController::class);
    Route::get('/skills/destroy/{id}', [SkillController::class, 'destroy'])->name('skills.delete');

    Route::resource('expertise', ExpertiseController::class);
    Route::get('/expertise/destroy/{id}', [ExpertiseController::class, 'destroy'])->name('expertise.delete');

    Route::resource('consultant-categories', ConsultantCategoryController::class);
    Route::get('/consultant-categories/destroy/{id}', [ConsultantCategoryController::class, 'destroy'])->name('consultant-categories.delete');

    Route::resource('badges', BadgeController::class);
    Route::get('/badges/destroy/{id}', [BadgeController::class, 'destroy'])->name('badges.delete');

    Route::group(['prefix' => 'client-badge'], function () {
        Route::get('/', [BadgeController::class, 'store'])->name('client_badges_create');
        Route::get('/list', [BadgeController::class, 'clientBadgesIndex'])->name('client_badges_index');
        Route::get('/edit/{id}', [BadgeController::class, 'clientBadgesEdit'])->name('client_badges_edit');
    });

    // wallet balance add by admin
    Route::post('/wallet-balance-by-admin', [WalletController::class, 'walletPaymentByAdmin'])->name('admin_wallet.store');

    //PackageController for Freelancer and Client
    Route::get('/freelancer-package-index/{type}', [PackageController::class, 'index'])->name('freelancer_package.index');
    Route::get('/freelancer-package-create/{type}', [PackageController::class, 'create'])->name('freelancer_package.create');
    Route::post('/package-store', [PackageController::class, 'store'])->name('package.store');
    Route::post('/package-update/{id}', [PackageController::class, 'update'])->name('package.update');
    Route::get('/package-destroy/{id}', [PackageController::class, 'destroy'])->name('package.delete');
    Route::get('/freelancer-package-edit/{id}', [PackageController::class, 'edit'])->name('freelancer_package.edit');
    Route::get('/client-package-index/{type}', [PackageController::class, 'index'])->name('client_package.index');
    Route::get('/client-package-create/{type}', [PackageController::class, 'create'])->name('client_package.create');
    Route::get('/client-package-edit/{id}', [PackageController::class, 'edit'])->name('client_package.edit');

    //LanguageController for Freelancer and Client
    Route::resource('/languages', LanguageController::class);

    Route::group(['prefix' => 'languages'], function () {
        Route::get('/destroy/{id}', [LanguageController::class, 'destroy'])->name('languages.delete');
        Route::post('/key_value_store', [LanguageController::class, 'keyValueStore'])->name('languages.key_value_store');
        Route::post('/update_language_status', [LanguageController::class, 'updateLanguageStatus'])->name('languages.update_language_status');
    });

    //.env update
    Route::post('/env_key_update', [SystemConfigurationController::class, 'envKeyUpdate'])->name('env_key_update.update');
    Route::post('/system-configuration/update', [SystemConfigurationController::class, 'update'])->name('system_configuration.update');

    //CurrencyController
    Route::resource('currencies', CurrencyController::class);
    Route::get('/currencies/destroy/{id}', [CurrencyController::class, 'destroy'])->name('currencies.delete');
    Route::get('/currency/set_currency', [CurrencyController::class, 'setCurrency'])->name('currencies.set_currency');

    //RoleController
    Route::resource('roles', RoleController::class);
    Route::get('/roles/destroy/{id}', [RoleController::class, 'destroy'])->name('roles.delete');

    //EmployeeController
    Route::group(['prefix' => 'employees'], function () {
        Route::get('/{name}', [EmployeeController::class, 'index'])->name('employees.index');
        Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('employees.store');
        Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('employees.update');
        Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employees.edit');
        Route::get('/set-permission/{id}', [EmployeeController::class, 'show'])->name('employees.set_permission');
        Route::get('/destroy/{id}', [EmployeeController::class, 'destroy'])->name('employees.delete');
    });

    Route::post('/permissions/update/{id}', [EmployeeController::class, 'permissionUpdate'])->name('permissions.update');

    Route::resource('countries', CountryController::class);
    Route::get('/countries/destroy/{id}', [CountryController::class, 'destroy'])->name('countries.delete');

    Route::resource('cities', CityController::class);
    Route::get('/cities/destroy/{id}', [CityController::class, 'destroy'])->name('cities.delete');

    Route::get('/all-projects', [AdminProjectController::class, 'allProjects'])->name('all_projects');
    Route::get('/running-projects', [AdminProjectController::class, 'runningProjects'])->name('running_projects');
    Route::get('/open-projects', [AdminProjectController::class, 'openProjects'])->name('open_projects');
    Route::get('/cancelled-projects', [AdminProjectController::class, 'cancelledProjects'])->name('cancelled_projects');
    Route::get('/projects/destroy/{id}', [ProjectController::class, 'destroy'])->name('delete_project_by_admin');
    Route::post('/projects/approval-status', [AdminProjectController::class, 'projectApproval'])->name('project_approval');

    Route::get('/general-configuration', [SystemConfigurationController::class, 'activationView'])->name('general_configuration');
    Route::post('/general-configuration-update', [SystemConfigurationController::class, 'updateActivation'])->name('system_configuration.update.activation');
    Route::post('/freelancer-payment-configuration-update', [SystemConfigurationController::class, 'update'])->name('freelancer_payment_config_update');

    Route::get('/freelancer-payment-configuration', [SystemConfigurationController::class, 'freelancerPaymentConfig'])->name('freelancer_payment_settings');
    Route::get('/refund-settings', [SystemConfigurationController::class, 'refundSettings'])->name('refund_settings');

    Route::get('cancel-project-request/index', )->name('cancel-project-request.index');
    Route::post('cancel-project-request/show', [CancelProjectController::class, 'show'])->name('cancel-project-request.show');
    Route::get('cancel-project-request/destroy/{id}', [CancelProjectController::class, 'destroy'])->name('cancel-project-request.delete');
    Route::post('cancel-project-request/accepted', [CancelProjectController::class, 'requestAccepted'])->name('cancel-project-request.request_accepted');

    //general config
    Route::resource('general-config', GeneralConfigurationController::class);

    //email config
    Route::resource('email-config', EmailConfigurationController::class);

    //payment config
    Route::resource('payment-config', \App\Http\Controllers\PaymentConfigurationController::class);

    //Social Media config
    Route::resource('social-media-config', \App\Http\Controllers\SocialMediaConfigurationController::class);

    Route::get('/all-freelancers', [UserController::class, 'allFreelancers'])->name('all_freelancers');
    Route::get('/freelancer-info/{user_name}', [UserController::class, 'freelancerDetails'])->name('freelancer_info_show');

    Route::get('/all-clients', [UserController::class, 'allClients'])->name('all_clients');
    Route::get('/client-info/{user_name}', [UserController::class, 'clientDetails'])->name('client_info_show');
    Route::get('user/ban/{id}', [UserController::class, 'destroy'])->name('user.ban');
    Route::get('/user/login/{id}', [UserController::class, 'login'])->name('freelancers_clients.login');

    Route::get('/verification-requests', [VerificationController::class, 'index'])->name('verification_requests');
    Route::get('/verification-request/details/{username}', [VerificationController::class, 'show'])->name('verification_request_details');
    Route::get('/verification-request/destroy/{id}', [VerificationController::class, 'destroy'])->name('verification_request_delete');
    Route::post('/verification-accept', [VerificationController::class, 'verificationAccept'])->name('verififaction_accept');
    Route::post('/verification-reject', [VerificationController::class, 'verificationReject'])->name('verififaction_reject');

    //Blog Section
    Route::resource('blog-category', BlogCategoryController::class);
    Route::get('/blog-category/destroy/{id}', [BlogCategoryController::class, 'destroy'])->name('blog-category.delete');

    Route::resource('blog', BlogController::class);
    Route::get('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
    Route::post('/blog/change-status', [BlogController::class, 'changeStatus'])->name('blog.change-status');

    //seminars
    Route::resource('seminar', SeminarController::class);
    Route::resource('seminar-mode', SeminarModeController::class);
    Route::resource('seminar-software', SeminarSoftwareController::class);
    Route::get('/seminar/destroy/{id}', [SeminarController::class, 'destroy'])->name('seminar.delete');
    Route::get('/seminar-mode/destroy/{id}', [SeminarModeController::class, 'destroy'])->name('seminar-mode.delete');
    Route::get('/seminar-software/destroy/{id}', [SeminarSoftwareController::class, 'destroy'])->name('seminar-software.delete');

    //scholarships
    Route::resource('scholarship-category', ScholarshipCategoryController::class);
    Route::get('/scholarship-category/destroy/{id}', [ScholarshipCategoryController::class, 'destroy'])->name('scholarship-category.delete');
    Route::resource('scholarship', ScholarshipController::class);
    Route::get('/scholarship/destroy/{id}', [ScholarshipController::class, 'destroy'])->name('scholarship.delete');
    Route::post('/scholarship/change-status', [ScholarshipController::class, 'changeStatus'])->name('scholarship.change-status');

    Route::resource('scholarship-level', ScholarshipLevelController::class);
    Route::get('/scholarship-level/destroy/{id}', [ScholarshipLevelController::class, 'destroy'])->name('scholarship-level.delete');

    Route::resource('scholarship-university', ScholarshipUniversityController::class);
    Route::get('/scholarship-university/destroy/{id}', [ScholarshipUniversityController::class, 'destroy'])->name('scholarship-university.delete');

    Route::resource('scholarship-country', ScholarshipCountryController::class);
    Route::get('/scholarship-country/destroy/{id}', [ScholarshipCountryController::class, 'destroy'])->name('scholarship-country.delete');

    Route::resource('scholarship-city', ScholarshipCityController::class);
    Route::get('/scholarship-city/destroy/{id}', [ScholarshipCityController::class, 'destroy'])->name('scholarship-city.delete');

    Route::resource('scholarship-qualification', ScholarshipQualificationController::class);
    Route::get('/scholarship-qualification/destroy/{id}', [ScholarshipQualificationController::class, 'destroy'])->name('scholarship-qualification.delete');

    Route::resource('scholarship-who-can-apply', ScholarshipWhoCanApplyController::class);
    Route::get('/scholarship-who-can-apply/destroy/{id}', [ScholarshipWhoCanApplyController::class, 'destroy'])->name('scholarship-who-can-apply.delete');

    Route::resource('scholarship-field-study', ScholarshipFieldStudyController::class);
    Route::get('/scholarship-field-study/destroy/{id}', [ScholarshipFieldStudyController::class, 'destroy'])->name('scholarship-field-study.delete');

    //Subscribers
    Route::get('/subscribers/destroy/{id}', [\App\Http\Controllers\SubscriberController::class, 'destroy'])->name('admin.subscribers.delete');

    // Newsletter
    Route::group(['prefix' => 'newsletter'], function () {
        Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletters.index');
        Route::post('/newsletter/send', [NewsletterController::class, 'send'])->name('newsletters.send');
        Route::post('/newsletter/test/smtp', [NewsletterController::class, 'testEmail'])->name('test.smtp');
    });

    // website setting
    Route::group(['prefix' => 'website'], function () {
        Route::get('/home', [SystemConfigurationController::class, 'homeSettings'])->name('website.home');
        Route::view('/header', 'admin.default.website.header')->name('website.header')->middleware(['permission:show header']);
        Route::view('/footer', 'admin.default.website.footer')->name('website.footer')->middleware(['permission:show footer']);
        Route::view('/pages', 'admin.default.website.pages')->name('website.pages')->middleware(['permission:show pages']);
        Route::view('/appearance', 'admin.default.website.appearance')->name('website.appearance')->middleware(['permission:show apperance']);

        Route::resource('custom-pages', PageController::class);
        Route::get('/custom-pages/destroy/{id}', [PageController::class, 'destroy'])->name('custom-pages.delete');
    });

    //Policy related
    Route::get('/policy/{type}', [SystemConfigurationController::class, 'policyIndex'])->name('policy.index');
    Route::post('/system-policy/update',  [SystemConfigurationController::class, 'policyUpdate'])->name('system_policy.update');

    //Milestone Pay Requests
    Route::get('/all-milestone-requests', [MilestonePaymentController::class, 'index'])->name('milestone-requests.admin.all');
    Route::get('/milestone-requests/{id}', [MilestonePaymentController::class, 'milestoneRequestDetails'])->name('milestone_request_details');

    // Milestone payment History
    Route::get('/all-project-payments', [MilestonePaymentController::class, 'adminIndex'])->name('payment_history_for_admin');

    // Milestone payment to freelancer
    Route::get('/pay-to-user/{id}', [PaytoFreelancerController::class, 'payToFreelancer'])->name('pay_to_freelancer');
    Route::get('/pay_to_freelancer/cancel/{id}', [PaytoFreelancerController::class, 'cancelRequest'])->name('pay_to_freelancer.cancel');
    Route::get('/freelancer-payments', [PaytoFreelancerController::class, 'index'])->name('freelancer_payment.index');
    Route::post('/pay-to-user/pay-store', [PaytoFreelancerController::class, 'pay'])->name('project_milestone_pay_from_admin');
    Route::get('/withdraw-requests', [PaytoFreelancerController::class, 'withdrawRequests'])->name('withdraw_request.index');

    // Package payment History
    Route::get('/all-package-payments', [PackagePaymentController::class, 'adminIndex'])->name('package_payment_history_for_admin');

    // Service payment history
    Route::get('/all-services-admin', [ServiceController::class, 'adminAllServices'])->name('all_services_admin');
    Route::get('/all-cancelled_services', [ServiceController::class, 'allCancelledServices'])->name('cancelled_services_admin');

    Route::get('/services-requested-for-cancellation', [ServiceController::class, 'adminRequestedServicesForCancellation'])->name('service_cancellation.requests');
    Route::post('cancel-service-request/show', [ServiceController::class, 'cancelServiceRequestShow'])->name('cancel-service-request.show');
    Route::post('cancel-service-request/accepted', [ServiceController::class, 'cancelServiceRequestAccepted'])->name('cancel-service-request.request_accepted');

    Route::get('/admin-service/{id}/cancel', [ServiceController::class, 'adminCancelService'])->name('cancel-service-request.delete');
    Route::get('/all-service-payments', [ServicePaymentController::class, 'adminIndex'])->name('service_payment_history_for_admin');

    // Wallet Recharge History
    Route::get('/all-wallet-recharges', [WalletController::class, 'adminIndex'])->name('wallet_history.admin');

    //chat_view
    Route::get('/user-chats', [ChatController::class, 'adminChatIndex'])->name('chat.admin.all');
    Route::get('/user-chats/{id}',  [ChatController::class, 'adminChatDetails'])->name('chat_details_for_admin');

    //Addon
    Route::resource('addons', AddonController::class);
    Route::post('/addons/activation', [AddonController::class, 'activation'])->name('addons.activation');

    //Freelancer Review
    Route::group(['prefix' => 'reviews'], function () {
        Route::get('/freelancer', [ReviewController::class, 'freelancerReviewIndex'])->name('reviews.freelancer');
        Route::get('/client', [ReviewController::class, 'clientReviewIndex'])->name('reviews.client');
        Route::post('/published', [ReviewController::class, 'updateReviewPublished'])->name('reviews.published');
    });

    Route::get('/notifications', [NotificationController::class, 'adminListing'])->name('admin.notifications');

    Route::resource('staffs', StaffController::class);
    Route::get('/staffs/delete/{id}', [StaffController::class, 'destroy'])->name('staffs.delete');

    Route::view('/system/update', 'admin.default.system.update')->name('system_update');
    Route::view('/system/server-status', 'admin.default.system.server_status')->name('system_server');

    // uploaded files
    Route::resource('/uploaded-files', AizUploadController::class);
    Route::any('/uploaded-files/file-info', [AizUploadController::class, 'file_info'])->name('uploaded-files.info');
    Route::get('/uploaded-files/destroy/{id}', [AizUploadController::class, 'destroy'])->name('uploaded-files.delete');

    Route::get('/cache-cache', [HomeController::class, 'clearCache'])->name('cache.clear');

    // For SEO
    Route::resource('site-page', SitePagesController::class);
    Route::resource('page-optimization', PageOptimizationController::class);
});
