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
    Route::view('/scholarship-database', 'figma.scholarshipdatabase');

    Route::view('/scholarship-singlePage', 'figma.scholarshipsinglepage');
    Route::view('/search-empty', 'figma.searchempty');

    //client Registration
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

    //expert status
    Route::view('/expert-status', 'figma.expert-status');
    Route::view('/expert-status-proposal', 'figma.expert-status-proposal');
    Route::view('/expert-status-analytics', 'figma.expert-status-analytics');

    //Client Dashboard
    Route::view('/client-dashboardhome', 'figma.clientdashboardhome');
    Route::view('/client-dashboard', 'figma.clientdashboard');
    Route::view('/client-dashboardexpertconsultant', 'figma.clientdashboardexpertconsultant');
    Route::view('/client-dashboardexpertconsultantteam', 'figma.clientdashboardexpertconsultantteam');
    Route::view('/client-dashboardallcontact', 'figma.clientdashboardallcontact');
    Route::view('/client-dashboardexperthire', 'figma.clientdashboardexperthire');

    Route::view('/client-clientdashboardexpertsave', 'figma.clientdashboardexpertsave');

    Route::view('/client-clientaddpayment', 'figma.clientaddpayment');
    Route::view('/client-clientvisapaypal', 'figma.clientvisapaypalpayment');
    Route::view('/client-addpaymentdouable', 'figma.clientaddpaymentdouable');

    Route::view('/client-weeklyreportsummary', 'figma.clientweeklyreportsummary');
    Route::view('/client-weeklyreportsummarydate', 'figma.clientweeklyreportsummarydate');

    Route::view('/client-weeklyreporttransction', 'figma.clientweeklyreporttransaction');

    Route::view('/client-weeklyreporttwobudget', 'figma.clientweeklyreporttwobudget');
    Route::view('/client-dashboardatimesheet', 'figma.clientdashboardatimesheet');
    Route::view('/client-passwordsecurity', 'figma.clientdashboardpasswordsecurity');
    Route::view('/client-notificationsettting', 'figma.clientdashboardnotificationsettting');
    //Projects
    Route::view('/find-projects', 'figma.find-projects');
    Route::view('/project-details-view', 'figma.project-details-view');

    // Admin dashboard
    Route::view('/super-admin-layout', 'figma.admin-layout');
    Route::view('/super-admin-projects', 'figma.admin-projects');
    Route::view('/super-admin-dashboardclient', 'figma.admindashboardclient');
    Route::view('/super-admin-dashboardexpert', 'figma.admindashboardexpert');
    Route::view('/super-admin-scholarship', 'figma.admindashboardscholarship');
    Route::view('/super-admin-scholarship-post', 'figma.admindashboardscholarshippost');

    Route::view('/super-admin-payment', 'figma.adminpayment');
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
    Route::view('/expert-get-paid', 'figma.expert-get-paid');
    Route::view('/expert-password-security', 'figma.expert-password-security');
    Route::view('/expert-id-verify', 'figma.expert-id-verify');
    Route::view('/expert-notification-settings', 'figma.expert-notification-settings');
    Route::view('/expert-saved-jobs', 'figma.expert-saved-jobs');
    Route::view('/expert-add-payment-method', '');
    Route::view('/expert-tax-information', '');
    Route::view('/expert-find-project', '');
});
