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
        DB::table('status')->insert([

            'text'                =>          'پرداخت نشده'
        ]);

        DB::table('status')->insert([

            'text'                =>          'منقضی'
        ]);

        DB::table('status')->insert([

            'text'                =>          'منتظر آپلود تصاویر'
        ]);

        DB::table('status')->insert([

            'text'                =>          'منتظر تایید فراگارانتی'
        ]);

        DB::table('status')->insert([

            'text'                =>          'نقص مدارک'
        ]);

    }
}
