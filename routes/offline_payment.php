<?php

/*
|--------------------------------------------------------------------------
| Offline Payment Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin
use App\Http\Controllers\Frontend\MilestonePaymentController;
use App\Http\Controllers\Frontend\PackagePaymentController;
use App\Http\Controllers\Frontend\ServicePaymentController;

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){

    Route::get('/manual_package_payments_history', [PackagePaymentController::class, 'manualPackagePaymentsHistory'])->name('offline_package_payments_history');
    Route::get('/manual_package_payment/approve/{id}',  [PackagePaymentController::class, 'approveOfflinePackagePayment'])->name('offline_package_payment.approve');

    Route::get('/offline_service_payments_history', [ServicePaymentController::class, 'offlineServicePaymentsHistory'])->name('offline_service_payments_history');
    Route::get('/offline_service_payment/approve/{id}', [ServicePaymentController::class, 'approveOfflineServicePayment'])->name('offline_service_payment.approve');

    Route::get('/offline_project_payments_history', [MilestonePaymentController::class, 'offlineProjectPaymentsHistory'])->name('offline_project_payments_history');
    Route::get('/offline_projoct_payment/approve/{id}', [MilestonePaymentController::class, 'approveOfflineProjectPayment'])->name('offline_project_payment.approve');
});

Route::group(['middleware' => ['user']], function(){
    Route::post('/offline-package-paymnet', [PackagePaymentController::class, 'purchasePackageOffline'])->name('make_offline_package_payment');
    Route::post('/offline-service-package-paymnet', [ServicePaymentController::class, 'purchaseServicePackageOffline'])->name('make_offline_service_package_payment');
    Route::post('/offline-milestone-payment', [MilestonePaymentController::class, 'offlineMilestonePaymentToAdmin'])->name('offline_milestone_payment_to_admin');
});
