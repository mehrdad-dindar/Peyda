<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(

            [
                'name'                =>          'تهران',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'قزوین',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'یزد',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'البرز',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'گیلان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'مازندران',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'اردبیل',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'اصفهان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'سیستان و بلوچستان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'قم',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'گلستان',
            ],
        );
    }
}
