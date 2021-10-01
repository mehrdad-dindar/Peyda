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
                'name'                =>          'آذربایجان شرقی',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'آذربایجان غربی',
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
                'name'                =>          'البرز',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'ایلام',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'بوشهر',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'تهران',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'چهارمحال وبختیاری',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'خراسان جنوبی',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'خراسان رضوی',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'خراسان شمالی',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'خوزستان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'زنجان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'سمنان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'سیستان وبلوچستان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'فارس',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'قزوین',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'قم',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'کردستان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'کرمان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'کرمانشاه',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'کهگیلویه وبویراحمد',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'گلستان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'گیلان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'لرستان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'مازندران',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'مرکزی',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'هرمزگان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'همدان',
            ],
        );
        DB::table('cities')->insert(

            [
                'name'                =>          'یزد',
            ],
        );
    }
}
