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
});
