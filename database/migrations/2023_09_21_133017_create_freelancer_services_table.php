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
        Schema::create('freelancer_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->text('title');
            $table->text('image')->nullable();
            $table->string('slug')->nullable();
            $table->longText('about_service')->nullable();
            $table->bigInteger('project_cat_id');
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
        Schema::dropIfExists('freelancer_services');
    }
};