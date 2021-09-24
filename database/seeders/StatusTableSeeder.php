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
                'text'                =>          'غیر فعال',
                'color'                =>          'danger'
            ]
        );

        DB::table('statuses')->insert([

            'text'                =>          'فعال',
            'color'                =>          'success'
        ]);
        DB::table('statuses')->insert([

            'text'                =>          'پرداخت نشده',
            'color'                =>          'secondary'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'منقضی',
            'color'                =>          'danger'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'در انتظار آپلود مدارک',
            'color'                =>          'warning text-dark'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'در حال بررسی مدارک',
            'color'                =>          'primary'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'نقص مدارک',
            'color'                =>          'warning text-dark'
        ]);

        DB::table('statuses')->insert([

            'text'                =>          'پرداخت ناموفق',
            'color'                =>          'secondary'
        ]);

    }
}
