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
        $parentSkills = DB::table('parent_skills')->get();

        $parentSkillsArray = [];
        $childSkillsArray = [];

        foreach ($parentSkills as $parentSkill) {
            $childSkills = DB::table('skills')->where('parent_skill_id', $parentSkill->id)->get();

            $parentSkillsArray[] = [
                'id' => $parentSkill->id,
                'name' => $parentSkill->name,
                'parent_id' => null,
            ];

            foreach ($childSkills as $childSkill) {
                if($childSkill->parent_skill_id == 0) {
                    continue;
                }

                $childSkillsArray[] = [
                    'name' => $childSkill->name,
                    'parent_id' => $parentSkill->id,
                ];
            }
        }

        DB::table('skills')->delete();
        DB::table('parent_skills')->delete();

        Schema::table('skills', function (Blueprint $table) {
            $table->renameColumn('parent_skill_id', 'parent_id');
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_id')->nullable(true)->change();
        });

        DB::table('skills')->insert($parentSkillsArray);
        DB::table('skills')->insert($childSkillsArray);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            //
        });
    }
};
