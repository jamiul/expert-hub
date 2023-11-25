<?php

use App\Http\Controllers\Figma\FigmaController;

Route::group(['prefix' => 'figma'], function () {
    //consultant Registration
    Route::get('/consultant-login', [FigmaController::class, 'consultantLogin']);
    Route::get('/consultant-signup', [FigmaController::class, 'consultantSignup']);
    Route::get('/verify-email', [FigmaController::class, 'consultantVerifyEmail']);
    Route::get('/verify-your-email', [FigmaController::class, 'consultantVerifyYourEmail']);
    Route::get('/profile-setup', [FigmaController::class, 'profileSetup']);
    Route::get('/profile-details', [FigmaController::class, 'profileDetails']);
    Route::get('/profile-expertises', [FigmaController::class, 'profileExpertises']);
    Route::get('/profile-education', [FigmaController::class, 'profileEducation']);
    Route::get('/profile-consultation', [FigmaController::class, 'profileConsultation']);
    Route::get('/profile-consultation-books', [FigmaController::class, 'profileConsultationBooks']);
    Route::get('/profile-consultation-interview', [FigmaController::class, 'profileConsultationInterview']);
    Route::get('/profile-consultation-media-interview', [FigmaController::class, 'profileConsultationMediaInterview']);
    Route::get('/profile-biography', [FigmaController::class, 'profileBiography']);
    Route::get('/profile-picture', [FigmaController::class, 'profilePicture']);
    Route::get('/profile-completed', [FigmaController::class, 'profileCompleted']);
    Route::get('/profile-expertises-popup', [FigmaController::class, 'profileExpertisesPopup']);

    //client Registration
    Route::get('/client-login', [FigmaController::class, 'clientLogin']);
    Route::get('/client-signup', [FigmaController::class, 'clientSignup']);
    Route::get('/client-verify-email', [FigmaController::class, 'clientVerifyEmail']);
    Route::get('/client-verify-your-email', [FigmaController::class, 'clientVerifyYourEmail']);

    //expert dashboard
    Route::get('/expert-dashboard', [FigmaController::class, 'expertdashboard']);

    //expert profile
    Route::get('/expert-profile', [FigmaController::class, 'expertprofile']);

    //expert status
    Route::get('/expert-status', [FigmaController::class, 'expertstatus']);
    Route::get('/expert-status-proposal', [FigmaController::class, 'expertstatusproposal']);
    Route::get('/expert-status-analytics', [FigmaController::class, 'expertstatusanalytics']);

    //Client Dashboard
    Route::get('/client-dashboardhome', [FigmaController::class, 'clientdashboardhome']);
    Route::get('/client-dashboard', [FigmaController::class, 'clientdashboard']);
    Route::get('/client-dashboardexpertconsultant', [FigmaController::class, 'clientdashboardexpertconsultant']);
    Route::get('/client-dashboardexpertconsultantteam', [FigmaController::class, 'clientdashboardexpertconsultantteam']);
    Route::get('/client-dashboardallcontact', [FigmaController::class, 'clientdashboardallcontact']);
    Route::get('/client-dashboardexperthire', [FigmaController::class, 'clientdashboardexperthire']);
    Route::get('/client-clientdashboardexpertsave', [FigmaController::class, 'clientdashboardexpertsave']);
    Route::get('/client-clientaddpayment', [FigmaController::class, 'clientaddpayment']);
    Route::get('/client-clientvisapaypal', [FigmaController::class, 'clientvisapaypalpayment']);
    Route::get('/client-addpaymentdouable', [FigmaController::class, 'clientaddpaymentdouable']);
    
    Route::get('/client-weeklyreportsummary', [FigmaController::class, 'clientweeklyreportsummary']);
    Route::get('/client-weeklyreportsummarydate', [FigmaController::class, 'clientweeklyreportsummarydate']); 

    Route::get('/client-weeklyreporttransction', [FigmaController::class, 'clientweeklyreporttransaction']); 
    
    Route::get('/client-weeklyreporttwobudget', [FigmaController::class, 'clientweeklyreporttwobudget']);
    Route::get('/client-dashboardatimesheet', [FigmaController::class, 'clientdashboardatimesheet']);
    Route::get('/client-passwordsecurity', [FigmaController::class, 'clientdashboardpasswordsecurity']);
    Route::get('/client-notificationsettting', [FigmaController::class, 'clientdashboardnotificationsettting']);
    // Admin dashboard
    Route::get('/super-admin-dashboardhome', [FigmaController::class, 'admindashboardhome']);
    Route::get('/super-admin-dashboardclient', [FigmaController::class, 'admindashboardclient']);
    Route::get('/super-admin-dashboardexpert', [FigmaController::class, 'admindashboardexpert']);

    Route::get('/super-admin-payment', [FigmaController::class, 'adminpayment']);
    Route::get('/super-admin-progress', [FigmaController::class, 'adminpaymentprogress']);

    //Expert Dashboard Login
    Route::get('/super-admin-expertlogin', [FigmaController::class, 'experthboardlogin']);
    Route::get('/super-admin-expertloginform', [FigmaController::class, 'experthboardloginform']);
    Route::get('/super-admin-clientloginform', [FigmaController::class, 'clientdashboardloginform']);
    Route::get('/super-admin-frontend-home', [FigmaController::class, 'frontentdashboardhome']);
    Route::get('/super-admin-frontend-about', [FigmaController::class, 'frontentdashboardabout']);



    // Training Checkout
    Route::get('/training-checkout', [FigmaController::class, 'trainingcheckout']);
    

    //expert contract
    Route::get('/expert-active-contract', [FigmaController::class, 'expertactivecontract']);
    Route::get('/expert-all-contract', [FigmaController::class, 'expertallcontract']);
    Route::get('/expert-services', [FigmaController::class, 'expertservices']);
    Route::get('/expert-work-diary', [FigmaController::class, 'expertworkdiary']);
    Route::get('/expert-proposal', [FigmaController::class, 'expertproposal']);
    Route::get('/expert-job-offer', [FigmaController::class, 'expertjoboffer']);
    Route::get('/expert-get-paid', [FigmaController::class, 'expertgetpaid']);
    Route::get('/expert-password-security', [FigmaController::class, 'expertpasswordsecurity']);
    Route::get('/expert-id-verify', [FigmaController::class, 'expertidverify']);
    Route::get('/expert-notification-settings', [FigmaController::class, 'expertnotificationsettings']);
    Route::get('/expert-saved-jobs', [FigmaController::class, 'expertsavedjobs']);
    Route::get('/expert-add-payment-method', [FigmaController::class, 'expertaddpaymentmethod']);
    Route::get('/expert-tax-information', [FigmaController::class, 'experttaxinformation']);
    Route::get('/expert-find-project', [FigmaController::class, 'expertfindprojects']);
});
