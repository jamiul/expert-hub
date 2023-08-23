<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('seminar_date');
            $table->unsignedBigInteger('seminar_mode_id')->nullable();
            $table->unsignedBigInteger('seminar_software_id')->nullable();
            $table->string('software_description');
            $table->unsignedBigInteger('language_id')->nullable();
            $table->string('organiser_certificate')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->longText('instructor_descriptions')->nullable();
            $table->string('slug')->nullable();
            $table->longText('course_objectives')->nullable();
            $table->longText('learning_outcomes')->nullable();
            $table->longText('teaching_learnig_methods')->nullable();
            $table->longText('teaching_resources')->nullable();
            $table->string('seat')->nullable();
            $table->unsignedBigInteger('created_by')->nullable()->comment("Created by User/Admin Id");
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('updated_by')->nullable()->comment("Updated by User/Admin Id");
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('deleted_by')->nullable()->comment("Deleted by User/Admin Id");
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('seminar_mode_id')->references('id')->on('seminar_modes');
            $table->foreign('seminar_software_id')->references('id')->on('seminar_software');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seminars');
    }
}
