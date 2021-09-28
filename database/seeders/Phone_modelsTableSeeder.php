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
                'name'                =>          'iphone 12 Pro Max',
                'phone_brand_id'      =>          1,
            ],
        );
        DB::table('phone_models')->insert(

            [
                'name'                =>          'iphone 11 Pro Max',
                'phone_brand_id'      =>          1,
            ],
        );
        DB::table('phone_models')->insert(

            [
                'name'                =>          'Samsung Galaxy A20',
                'phone_brand_id'      =>          2,
            ],
        );
        DB::table('phone_models')->insert(

            [
                'name'                =>          'Samsung Galaxy A21',
                'phone_brand_id'      =>          2,
            ],
        );
        DB::table('phone_models')->insert(

            [
                'name'                =>          'Samsung Galaxy A22',
                'phone_brand_id'      =>          2,
            ],
        );
        DB::table('phone_models')->insert(

            [
                'name'                =>          'G8',
                'phone_brand_id'      =>          3,
            ],
        );
        DB::table('phone_models')->insert(

            [
                'name'                =>          'Poco f3',
                'phone_brand_id'      =>          4,
            ],
        );
        DB::table('phone_models')->insert(

            [
                'name'                =>          '9S',
                'phone_brand_id'      =>          5,
            ],
        );
        DB::table('phone_models')->insert(

            [
                'name'                =>          'Glx',
                'phone_brand_id'      =>          6,
            ],
        );
    }
}
