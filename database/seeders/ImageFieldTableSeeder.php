<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class ImageFieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_fields')->insert(
            [
            'name' => 'عکس از روی صفحه به همراه QR',
            'html_id' => 'front_pic',
            'description' => 'یک عکس از صفحه گوشی خود بگیرید به طوری که کد QR موجود در بالا به صورت واضح مشخص باشد.'
        ]);

        DB::table('image_fields')->insert(
            [
                'name' => 'IMEI عکس از',
                'html_id' => 'IMEI_pic',
                'description' => 'از طریق گوشی خود کد #06#* را شماره گیری نمایید و با دوربین دیگری از کد IMEI عکس بگیرید به طوری که تمام صفحه موبایل مشخص باشد.'
            ]
        );

        DB::table('image_fields')->insert([

            'name' => 'عکس از پشت گوشی',
            'html_id' => 'back_pic',
            'description' => 'با دستگاهی دیگر از درب پشت گوشی خود عکس بگیرید به صورتی که تمام بدنه پشتی آن مشخص باشد.'
        ]);


        DB::table('image_fields')->insert([

            'name' => 'عکس از کناره سمت راست گوشی',
            'html_id' => 'right_pic',
            'description' => 'از فریم های راست و بالای گوشی خود (سه رخ) عکس بگیرید'
        ]);

        DB::table('image_fields')->insert([

            'name' => 'عکس از کناره سمت چپ گوشی',
            'html_id' => 'left_pic',
            'description' => 'از فریم های پایین و چپ گوشی خود (سه رخ) عکس بگیرید'
        ]);

        DB::table('image_fields')->insert([

            'name' => 'عکس از سریال های روی جعبه',
            'html_id' => 'front_box_pic',
            'description' => 'یک عکس واضح از جعبه گوشی خود بگیرید به طوری که شماره سریال های آن مشخص باشد.'
        ]);

    }
}
