<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->delete();

        DB::table('currencies')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Dollar',
                    'symbol' => '$',
                    'code' => 'USD',
                    'exchange_rate' => 1.0,
                    'active' => 1,
                    'created_at' => '2019-12-05 11:38:58',
                    'updated_at' => '2020-03-08 09:38:50',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Taka',
                    'symbol' => '৳',
                    'code' => 'BDT',
                    'exchange_rate' => 80.5,
                    'active' => 1,
                    'created_at' => '2019-12-05 11:47:06',
                    'updated_at' => '2020-07-22 11:16:47',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Australian Dollar',
                    'symbol' => '$',
                    'code' => 'AUD',
                    'exchange_rate' => 1.5,
                    'active' => 1,
                    'created_at' => '2020-05-15 14:11:15',
                    'updated_at' => '2023-04-05 05:47:34',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Brazilian Real',
                    'symbol' => 'R$',
                    'code' => 'BRL',
                    'exchange_rate' => 3.25,
                    'active' => 1,
                    'created_at' => '2020-05-15 14:18:04',
                    'updated_at' => '2020-05-15 14:18:13',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Canadian Dollar',
                    'symbol' => '$',
                    'code' => 'CAD',
                    'exchange_rate' => 1.27,
                    'active' => 1,
                    'created_at' => '2020-05-15 14:18:43',
                    'updated_at' => '2020-05-15 14:22:48',
                    'deleted_at' => NULL,
                ),
        ));
    }
}
