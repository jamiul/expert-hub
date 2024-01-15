<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expert_k_y_c_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('business_type')->nullable();
            $table->string('country')->nullable();
            $table->string('individual_address')->nullable();
            $table->date('individual_dob')->nullable();
            $table->string('individual_email')->nullable();
            $table->string('individual_first_name')->nullable();
            $table->string('individual_last_name')->nullable();
            $table->string('individual_gender')->nullable();
            $table->string('individual_govt_id_number')->nullable();
            $table->string('individual_phone')->nullable();
            $table->string('individual_ssn_last_4')->nullable();
            $table->string('individual_verification_document_front')->nullable()->comment("The uploaded file needs to be a color image (smaller than 8,000px by 8,000px), in JPG, PNG, or PDF format, and less than 10 MB in size.");
            $table->string('individual_verification_document_back')->nullable()->comment("The uploaded file needs to be a color image (smaller than 8,000px by 8,000px), in JPG, PNG, or PDF format, and less than 10 MB in size.");
            $table->string('individual_verification_additional_document_front')->nullable()->comment("The uploaded file needs to be a color image (smaller than 8,000px by 8,000px), in JPG, PNG, or PDF format, and less than 10 MB in size.");
            $table->string('individual_verification_additional_document_back')->nullable()->comment("The uploaded file needs to be a color image (smaller than 8,000px by 8,000px), in JPG, PNG, or PDF format, and less than 10 MB in size.");
            $table->string('individual_registered_address_city')->nullable();
            $table->string('individual_registered_address_country')->nullable();
            $table->string('individual_registered_address_line1')->nullable();
            $table->string('individual_registered_address_line2')->nullable();
            $table->string('individual_registered_address_postal_code')->nullable();
            $table->string('individual_registered_address_state')->nullable();
            $table->string('tos_acceptance_date')->nullable();
            $table->string('tos_acceptance_ip')->nullable();
            $table->string('tos_acceptance_service_agreement')->nullable();
            $table->string('tos_acceptance_user_agent')->nullable();
            $table->string('default_currency')->nullable();
            $table->string('documents_bank_account_ownership_verification_files')->nullable();
            $table->string('external_account')->nullable();
            $table->string('settings_payouts_schedule_delay_days')->nullable();
            $table->string('settings_payouts_schedule_interval')->nullable();
            $table->string('settings_payouts_schedule_monthly_anchor')->nullable();
            $table->string('settings_payouts_schedule_weekly_anchor')->nullable();
            $table->string('status');
            $table->boolean('charges_enabled')->nullable();
            $table->boolean('details_submitted')->nullable();
            $table->boolean('payouts_enabled')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_k_y_c_s');
    }
};
