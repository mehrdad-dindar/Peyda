<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Phone_modelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phone_models')->insert(

            [
                'brand_id'                =>          '1',
                'name'                =>          'iphone X Pro Max',
            ],
        );
        DB::table('phone_models')->insert(

            [
                'brand_id'                =>          '2',
                'name'                =>          'Galaxy S21 Ultra',
            ],
        );
        DB::table('phone_models')->insert(

            [
                'brand_id'                =>          '3',
                'name'                =>          'G2 Pro',
            ],
        );
        DB::table('phone_models')->insert(

            [
                'brand_id'                =>          '4',
                'name'                =>          'Poco F3 lite 5G',
            ],
        );
        DB::table('phone_models')->insert(

            [
                'brand_id'                =>          '5',
                'name'                =>          '5X',
            ],
        );
        DB::table('phone_models')->insert(

            [
                'brand_id'                =>          '6',
                'name'                =>          'درنا',
            ],
        );
    }
}
