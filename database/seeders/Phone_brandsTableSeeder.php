<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Phone_brandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('phone_brands')->insert(

            [
                'name'                =>          'Apple',
            ],
        );
        DB::table('phone_brands')->insert(

            [
                'name'                =>          'Samsung',
            ],
        );
        DB::table('phone_brands')->insert(

            [
                'name'                =>          'LG',
            ],
        );
        DB::table('phone_brands')->insert(

            [
                'name'                =>          'Xiaomi',
            ],
        );
        DB::table('phone_brands')->insert(

            [
                'name'                =>          'Honor',
            ],
        );
        DB::table('phone_brands')->insert(

            [
                'name'                =>          'Glx',
            ],
        );
    }
}
