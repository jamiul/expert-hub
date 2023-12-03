<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->foreignId('language_id');
            $table->string('proficiency'); //App\Enums\LanguageProficiency
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_languages');
    }
};
