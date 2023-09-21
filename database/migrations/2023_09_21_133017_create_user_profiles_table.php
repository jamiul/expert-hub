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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index('user_profiles_user_id_foreign');
            $table->integer('user_role_id')->nullable();
            $table->string('gender', 50)->nullable();
            $table->string('nationality', 20)->nullable();
            $table->string('specialist')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('skills')->nullable();
            $table->longText('languages')->nullable();
            $table->double('hourly_rate', 8, 2)->nullable();
            $table->double('balance', 10, 2)->default(0);
            $table->float('rating', 4)->default(0);
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
        Schema::dropIfExists('user_profiles');
    }
};
