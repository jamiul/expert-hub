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
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id')->index('reviews_project_id_foreign');
            $table->unsignedBigInteger('reviewer_user_id')->index('reviews_reviewer_user_id_foreign');
            $table->integer('reviewed_user_id');
            $table->integer('reviewed_user_role_id')->nullable();
            $table->text('review')->nullable();
            $table->double('rating', 8, 2);
            $table->boolean('published')->default(true)->comment('0-not published, 1-published');
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
        Schema::dropIfExists('reviews');
    }
};
