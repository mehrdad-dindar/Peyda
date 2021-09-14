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
        DB::table('statuses')->insert(
            [
                'text'                =>          'غیر فعال'
            ]
        );

        DB::table('statuses')->insert([

            'text'                =>          'فعال'
        ]);
        DB::table('statuses')->insert([

            'text'                =>          'پرداخت نشده'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'منقضی'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'منتظر آپلود تصاویر'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'منتظر تایید فراگارانتی'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'نقص مدارک'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'پرداخت ناموفق'
        ]);

    }
}
