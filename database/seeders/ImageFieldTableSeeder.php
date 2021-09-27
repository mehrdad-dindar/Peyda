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
            'sample_URL' => 'qrcode.jpg',
            'description' => 'یک عکس از صفحه گوشی خود بگیرید به طوری که کد QR موجود در بالا به صورت واضح مشخص باشد.'
        ]);

        DB::table('image_fields')->insert(
            [
                'name' => 'صفحه نمایش عکس از',
                'html_id' => 'surface',
                'sample_URL' => 'surface.jpg',
                'description' => 'از صفحه نمایش دستگاه مورد نظر در حالت خاموش بودن صفحه به صورتی که تمام ابعاد و صفحه نمایش بدون بازتاب نور مشخص باشد عکس بگیرید.'
            ]
        );

        DB::table('image_fields')->insert(
            [
                'name' => 'IMEI عکس از',
                'html_id' => 'IMEI_pic',
                'sample_URL' => 'imei_phone.jpg',
                'description' => 'از طریق گوشی خود کد #06#* را شماره گیری نمایید و با دوربین دیگری از کد IMEI عکس بگیرید به طوری که تمام صفحه موبایل مشخص باشد.'
            ]
        );

        DB::table('image_fields')->insert([

            'name' => 'عکس از پشت گوشی',
            'html_id' => 'back_pic',
            'sample_URL' => 'back.jpg',
            'description' => 'با دستگاهی دیگر از درب پشت گوشی خود عکس بگیرید به صورتی که تمام بدنه پشتی آن مشخص باشد.'
        ]);


        DB::table('image_fields')->insert([

            'name' => 'عکس از کناره سمت راست گوشی',
            'html_id' => 'right_pic',
            'sample_URL' => '3face_r.jpg',
            'description' => 'از فریم های راست و بالای گوشی خود (سه رخ) عکس بگیرید'
        ]);

        DB::table('image_fields')->insert([

            'name' => 'عکس از کناره سمت چپ گوشی',
            'html_id' => 'left_pic',
            'sample_URL' => '3face_l.jpg',
            'description' => 'از فریم های پایین و چپ گوشی خود (سه رخ) عکس بگیرید'
        ]);

        DB::table('image_fields')->insert([

            'name' => 'عکس از سریال های روی جعبه',
            'html_id' => 'front_box_pic',
            'sample_URL' => 'imei_box.jpg',
            'description' => 'یک عکس واضح از جعبه گوشی خود بگیرید به طوری که شماره سریال های آن مشخص باشد.'
        ]);

    }
}
