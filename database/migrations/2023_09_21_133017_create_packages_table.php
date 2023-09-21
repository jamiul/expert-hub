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
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('type', 20)->comment('client/freelancer');
            $table->string('name');
            $table->double('price', 8, 2);
            $table->unsignedInteger('number_of_days')->default(0);
            $table->double('commission', 8, 2)->nullable()->default(0);
            $table->char('commission_type', 20)->nullable()->default('amount')->comment('flat/percenage');
            $table->string('badge')->nullable();
            $table->string('photo')->nullable();
            $table->integer('hourly_limit')->nullable();
            $table->integer('fixed_limit')->nullable();
            $table->integer('long_term_limit')->nullable();
            $table->integer('skill_add_limit')->nullable();
            $table->integer('bio_text_limit')->nullable();
            $table->integer('portfolio_add_limit')->nullable();
            $table->integer('bookmark_project_limit')->nullable();
            $table->integer('job_exp_limit')->nullable();
            $table->integer('service_limit')->default(0);
            $table->integer('following_status')->nullable();
            $table->boolean('recommended')->default(false);
            $table->boolean('active')->default(false)->comment('0-inactve, 1-active');
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
        Schema::dropIfExists('packages');
    }
};
