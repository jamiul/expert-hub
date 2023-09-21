<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->delete();

        DB::table('portfolios')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 14,
                    'name' => 'Scholarship Professional',
                    'type' => 'scholarship program support',
                    'description' => 'I am ready to serve',
                    'photo' => NULL,
                    'created_at' => '2023-04-14 12:49:32',
                    'updated_at' => '2023-04-14 12:49:32',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'user_id' => 6,
                    'name' => 'Document writing and editing',
                    'type' => 'Writing',
                    'description' => 'I can do professionally man, I was many types of documents written all ready done.',
                    'photo' => '182',
                    'created_at' => '2023-08-02 12:45:51',
                    'updated_at' => '2023-08-02 12:45:51',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
