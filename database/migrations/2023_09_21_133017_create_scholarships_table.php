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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('university_id')->nullable();
            $table->string('website_link')->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('whoCanApply_id');
            $table->unsignedInteger('qualification_id');
            $table->longText('fieldStudy_id')->nullable();
            $table->text('short_description')->nullable();
            $table->integer('banner')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('description')->nullable();
            $table->integer('meta_img')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('scholarships');
    }
};
