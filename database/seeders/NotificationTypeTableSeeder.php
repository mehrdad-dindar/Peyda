<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class NotificationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_types')->insert(
            [
                'name'                =>          'احراز هویت'
            ]
        );

        DB::table('notification_types')->insert([

            'name'                =>          'فراگارانتی'
        ]);

        DB::table('notification_types')->insert([

            'name'                =>          'استفاده از فراگارانتی'
        ]);
        DB::table('notification_types')->insert([

            'name'                =>          'انتقال فراگارانتی'
        ]);
    }
}
