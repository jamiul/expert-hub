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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_category_id')->index('projects_project_category_id_foreign');
            $table->char('type', 20)->comment('fixed/hourly/long_term');
            $table->unsignedBigInteger('client_user_id')->index('projects_client_user_id_foreign');
            $table->string('name');
            $table->text('image')->nullable();
            $table->text('excerpt');
            $table->longText('description')->nullable();
            $table->double('price', 8, 2);
            $table->longText('skills')->nullable();
            $table->string('attachment')->nullable();
            $table->double('hourly_rate', 8, 2);
            $table->boolean('biddable')->default(true);
            $table->boolean('private')->default(false);
            $table->boolean('closed')->default(false);
            $table->tinyInteger('cancel_status')->default(0);
            $table->integer('cancel_by_user_id')->nullable();
            $table->tinyInteger('project_approval')->default(0);
            $table->integer('bids')->default(0);
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
        Schema::dropIfExists('projects');
    }
};
