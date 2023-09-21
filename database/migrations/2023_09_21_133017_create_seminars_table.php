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
        Schema::create('seminars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->unsignedBigInteger('seminar_mode_id')->nullable()->index('seminars_seminar_mode_id_foreign');
            $table->unsignedBigInteger('seminar_software_id')->nullable()->index('seminars_seminar_software_id_foreign');
            $table->longText('software_description')->nullable();
            $table->unsignedBigInteger('language_id')->nullable()->index('seminars_language_id_foreign');
            $table->string('organiser_certificate')->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->index('seminars_user_id_foreign');
            $table->longText('instructor_descriptions')->nullable();
            $table->string('attachment', 250);
            $table->string('slug')->nullable();
            $table->longText('course_objectives')->nullable();
            $table->longText('learning_outcomes')->nullable();
            $table->longText('teaching_learning_methods')->nullable();
            $table->longText('teaching_resources')->nullable();
            $table->string('seat')->nullable();
            $table->unsignedBigInteger('created_by')->nullable()->index('seminars_created_by_foreign')->comment('Created by User/Admin Id');
            $table->unsignedBigInteger('updated_by')->nullable()->index('seminars_updated_by_foreign')->comment('Updated by User/Admin Id');
            $table->unsignedBigInteger('deleted_by')->nullable()->index('seminars_deleted_by_foreign')->comment('Deleted by User/Admin Id');
            $table->enum('status', ['draft', 'public', 'private'])->default('public');
            $table->string('zoom_link')->nullable();
            $table->unsignedBigInteger('project_category_id')->nullable()->index('seminars_project_category_id_foreign');
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
        Schema::dropIfExists('seminars');
    }
};
