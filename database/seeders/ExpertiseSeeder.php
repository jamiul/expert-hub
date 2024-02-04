<?php

namespace Database\Seeders;

use App\Models\Expertise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Expertise::truncate();
        $expertise = database_path('data/expertise.csv');
        $skillset = database_path('data/skillset.csv');

        foreach([$expertise, $skillset] as $feed){
            $isSkill = 0;
            if($feed == database_path('data/skillset.csv')){
                $isSkill = 1;
            }
            $data = array_map('str_getcsv', file($feed));
            $parents = array_shift($data);

            //Add label to each value
            $keyedData = array_map(function ($values) use ($parents) {
                return array_combine($parents, $values);
            }, $data);

            $parentData = [];
            foreach ($parents as $parent) {
                $parentData[] = [
                    'name' => trim($parent),
                    'parent_id' => null,
                    'is_skill' => $isSkill,
                ];
            }
            DB::table('expertises')->insert($parentData);
            if ($feed == database_path('data/skillset.csv')) {
                $parentIdLookup = Expertise::skill()->isParent()->pluck('id', 'name');
            }else{
                $parentIdLookup = Expertise::expertise()->isParent()->pluck('id', 'name');
            }
            $childData = [];
            foreach ($keyedData as $children) {
                foreach ($children as $parent => $child) {
                    if ($child) {
                        $childData[] = [
                            'name' => $child,
                            'parent_id' => $parentIdLookup[trim($parent)],
                            'is_skill' => $isSkill,
                        ];
                    }
                }
            }
            DB::table('expertises')->insert($childData);
        }
    }
}
