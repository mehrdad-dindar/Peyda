<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert(
            [
                'text'                =>          'غیر فعال'
            ]
        );

        DB::table('status')->insert([

            'text'                =>          'فعال'
        ]);

    }
}
