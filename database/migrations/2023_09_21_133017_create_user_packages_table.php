<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('package_id');
            $table->date('package_invalid_at')->nullable();
            $table->unsignedInteger('number_of_days')->nullable();
            $table->integer('hourly_limit')->nullable();
            $table->integer('fixed_limit')->nullable();
            $table->integer('long_term_limit')->nullable();
            $table->integer('skill_add_limit')->nullable();
            $table->integer('bio_text_limit')->nullable();
            $table->integer('portfolio_add_limit')->nullable();
            $table->integer('bookmark_project_limit')->nullable();
            $table->integer('bookmark_scholarship_limit')->nullable();
            $table->integer('job_exp_limit')->nullable();
            $table->integer('service_limit')->default(0);
            $table->integer('following_status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_packages');
    }
};
