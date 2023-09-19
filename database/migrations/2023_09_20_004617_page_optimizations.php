<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageOptimizations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_optimizations', function (Blueprint $table) {
            $table->id();
            $table->integer('s_page_id');
            $table->string('title',500);
            $table->string('keyword',2000);
            $table->string('description',2000);
            $table->integer('user_id');
            $table->timestamp('deleted_at');
            $table->timestamps();                     
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
