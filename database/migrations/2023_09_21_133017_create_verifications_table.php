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
        Schema::create('verifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('type', 50)->comment('email/phone/identity/payment');
            $table->unsignedBigInteger('user_id')->index('verifications_user_id_foreign');
            $table->integer('role_id')->nullable();
            $table->string('attachment')->nullable();
            $table->boolean('verified')->default(false)->comment('0-not verified, 1-verified');
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
        Schema::dropIfExists('verifications');
    }
};
