<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'figma'], function () {
    //consultant Registration
    Route::view('/consultant-login', 'figma.consultantlogin');
    Route::view('/consultant-signup', 'figma.consultantsignup');
    Route::view('/verify-email', 'figma.consultantverifyemail');
    Route::view('/verify-your-email', 'figma.consultantverifyyouremail');
    Route::view('/profile-setup', 'figma.profilesetup');
    Route::view('/profile-details', 'figma.profiledetails');
    Route::view('/profile-expertises', 'figma.profileexpertises');
    Route::view('/profile-education', 'figma.profileeducation');
    Route::view('/profile-consultation', 'figma.profileconsultation');
    Route::view('/profile-consultation-books', 'figma.profileconsultationbooks');
    Route::view('/profile-consultation-interview', 'figma.profileconsultationinterview');
    Route::view('/profile-consultation-media-interview', 'figma.profileconsultationmediainterview');
    Route::view('/profile-biography', 'figma.profilebiography');
    Route::view('/profile-picture', 'figma.profilepicture');
    Route::view('/profile-completed', 'figma.profilecompleted');

    // Consultation Modal
    Route::view('/add-consultation', 'figma.addconsultation');
    Route::view('/book-consultation', 'figma.bookconsultation');
    Route::view('/expert/profile/login/public', 'figma.loginpublic');


    Route::view('/scholarship-database', 'figma.scholarshipdatabase');
    Route::view('/scholarship-singlePage', 'figma.scholarshipsinglepage');
    Route::view('/search-empty', 'figma.searchempty');
    // client post Job
    Route::view('/job-posts', 'figma.projectCreate');
    Route::view('/jobposts-test', 'figma.clientjobpost');
    //client Registration
    Route::view('/home', 'figma.home-page');
    Route::view('/client-login', 'figma.clientlogin');
    Route::view('/client-signup', 'figma.clientsignup');
    Route::view('/client-profile-position-setup', 'figma.clientprofilepositionsetup');
    Route::view('/client-profile', 'figma.clientprofile');
    Route::view('/client-verify-email', 'figma.clientverifyemail');
    Route::view('/client-verify-your-email', 'figma.clientverifyyouremail');

    //expert dashboard
    Route::view('/expert-dashboard', 'figma.expert-dashboard');

    //expert profile
    Route::view('/expert-profile', 'figma.expert-profile');
    Route::view('/expert-public-profile', 'figma.expert-public-profile');
    Route::view('/user-consultation-booking-not-valuable', 'figma.not-available-expert-public-profile');
    Route::view('/not-available-booking-time', 'figma.not-available-booking-time');



    //expert status
    Route::view('/expert-status', 'figma.expert-status');
    Route::view('/expert-status-proposal', 'figma.expert-status-proposal');
    Route::view('/expert-status-analytics', 'figma.expert-status-analytics');

    //Client Dashboard
    Route::view('/client-dashboard', 'figma.clientdashboardhome');
    // Route::view('/client-dashboardhome', 'figma.clientdashboardhome');
    Route::view('/client-dashboard-all', 'figma.clientdashboard');
    Route::view('/client-dashboard-home', 'figma.clientdashboardhome');

    Route::view('/client-dashboard-expert-consultant', 'figma.clientdashboardexpertconsultant');
    Route::view('/client-dashboard-expert-consultant-team', 'figma.clientdashboardexpertconsultantteam');
    Route::view('/client-dashboard-all-contact', 'figma.clientdashboardallcontact');
    Route::view('/client-dashboard-expert-hire', 'figma.clientdashboardexperthire');

    Route::view('/client-dashboard-expert-save', 'figma.clientdashboardexpertsave');

    Route::view('/client-client-add-payment', 'figma.clientaddpayment');
    Route::view('/client-visa-paypal', 'figma.clientvisapaypalpayment');
    Route::view('/client-add-payment-double', 'figma.clientaddpaymentdouable');

    Route::view('/client-weekly-report-summary', 'figma.clientweeklyreportsummary');
    Route::view('/client-weekly-report-summary-date', 'figma.clientweeklyreportsummarydate');

    Route::view('/client-weekly-report-transaction', 'figma.clientweeklyreporttransaction');

    Route::view('/client-weekly-report-two-budget', 'figma.clientweeklyreporttwobudget');

    Route::view('/client-dashboard-atime-sheet', 'figma.clientdashboardatimesheet');
    Route::view('/client-password-security', 'figma.clientdashboardpasswordsecurity');
    Route::view('/client-notification-setting', 'figma.clientdashboardnotificationsettting');

    // Client Payment Module
    Route::view('/client-transaction', 'figma.client-transaction');
    Route::view('/client-payment-setting', 'figma.client-payment-setting');
    Route::view('/client-payment-setting-notification', 'figma.client-payment-setting-notification');
    // Expert Payment Module
    Route::view('/expert-transaction', 'figma.expert-transaction');
    Route::view('/expert-payment-setting', 'figma.client-payment-setting');
    Route::view('/expert-payment-setting-notification', 'figma.client-payment-setting-notification');
    Route::view('/expert-payment-setting-notification-empty', 'figma.client-payment-setting-notification-empty');
    Route::view('/expert-get-paid', 'figma.expert-get-paid');


    // Route::view('/client-tax-information', 'figma.client-tax-information');

    //Projects
    Route::view('/find-projects', 'figma.find-projects');
    Route::view('/project-details-view', 'figma.project-details-view');
    Route::view('/submit-hourly-project-proposal', 'figma.submit-hourly-project-proposal');
    Route::view('/submit-fixed-project-proposal', 'figma.submit-fixed-project-proposal');
    Route::view('/all-express-of-interest', 'figma.all-express-of-interest');
    Route::view('/express-of-interest-project-view', 'figma.express-of-interest-project-view');
    Route::view('/hired-project-view', 'figma.hired-project-view');
    Route::view('/invitation-project-view', 'figma.invitation-project-view');
    Route::view('/invitation-accept-hourly', 'figma.invitation-accept-hourly');
    Route::view('/invitation-accept-fixed', 'figma.invitation-accept-fixed');
    Route::view('/offer-project-view', 'figma.offer-project-view');


    // Admin dashboard
    Route::view('/super-admin-layout', 'figma.admin-layout');
    Route::view('/super-admin-projects', 'figma.admin-projects');
    Route::view('/super-admin-dashboardclient', 'figma.admindashboardclient');
    Route::view('/super-admin-dashboardexpert', 'figma.admindashboardexpert');
    Route::view('/super-admin-scholarship', 'figma.admindashboardscholarship');
    Route::view('/super-admin-scholarship-post', 'figma.admindashboardscholarshippost');

    Route::view('/super-admin-payment', 'figma.adminpayment');
    Route::view('/super-admin-payment-backup', 'figma.admin-payment-backup');
    Route::view('/super-admin-review', 'figma.adminpaymentprogress');

    //Expert Dashboard Login
    Route::view('/super-admin-expertlogin', 'figma.experthboardlogin');
    Route::view('/super-admin-expertloginform', 'figma.experthboardloginform');
    Route::view('/super-admin-clientloginform', 'figma.clientdashboardloginform');
    Route::view('/super-admin-frontend-home', 'figma.frontentdashboardhome');
    Route::view('/super-admin-frontend-about', 'figma.frontentdashboardabout');

    // Register-profile options
    Route::view('/notification', 'figma.allnotification');
    Route::view('/user-notification', 'figma.usernotification');
    Route::view('/client-chatbox', 'figma.clientchatbox');
    Route::view('/client-chatbox-new', 'figma.clientchatbox-new');

    // Training Checkout
    Route::view('/training-checkout', 'figma.trainingcheckout');

    //expert contract
    Route::view('/expert-active-contract', 'figma.expert-active-contract');
    Route::view('/expert-all-contract', 'figma.expert-all-contract');
    Route::view('/expert-services', 'figma.expert-services');
    Route::view('/expert-work-diary', 'figma.expert-work-diary');
    Route::view('/expert-proposal', 'figma.expert-proposals');
    Route::view('/expert-job-offer', 'figma.expert-job-offer');

    Route::view('/expert-password-security', 'figma.expert-password-security');
    Route::view('/expert-id-verify', 'figma.expert-id-verify');
    Route::view('/expert-notification-settings', 'figma.expert-notification-settings');
    Route::view('/expert-saved-jobs', 'figma.expert-saved-jobs');
    Route::view('/expert-add-payment-method', '');
    Route::view('/expert-tax-information', '');
    Route::view('/expert-find-project', '');

    //Global sections
    Route::view('/page-header', 'figma.page-header');

    //Project
    Route::view('/project/client-job-posts', 'figma.client-job-posts');
    Route::view('/project/client-job-contracts', 'figma.client-job-contracts');
    Route::view('/project/client-job-post-view', 'figma.client-job-post-view');
    Route::view('/project/client-send-job-offer', 'figma.client-send-job-offer');
    Route::view('/project/client-send-job-offer-view', 'figma.client-send-job-offer-view');
    Route::view('/project/client-eoi-view-with-expert-profile', 'figma.client-eoi-view-with-expert-profile');
    Route::view('/project/client-job-posts-deposit-payment', 'figma.client-job-posts-deposit-payment');

});
