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
        DB::table('image_fields')->insert([

            'name' => 'عکس از روی صفحه به همراه QR',
            'html_id' => 'front_pic',
            'description' => 'عکس از روی صفحه موبایل به صورتی که هر چهارگوشه موبایل به همراه QR که به صورت واضحی نمایان باشد.'
        ]);

        DB::table('image_fields')->insert(
            [
                'name' => 'IMEI عکس از',
                'html_id' => 'IMEI_pic',
                'description' => 'با شماره گیری کد #06#* از صفحه موبایل عکس بگیرید.'
            ]
        );

        DB::table('image_fields')->insert([

            'name' => 'عکس از پشت گوشی',
            'html_id' => 'back_pic',
            'description' => ''
        ]);


        DB::table('image_fields')->insert([

            'name' => 'عکس از کناره سمت راست گوشی',
            'html_id' => 'right_pic'
        ]);

        DB::table('image_fields')->insert([

            'name' => 'عکس از کناره سمت چپ گوشی',
            'html_id' => 'left_pic'
        ]);

        DB::table('image_fields')->insert([

            'name' => 'عکس از سریال های روی جعبه',
            'html_id' => 'front_box_pic'
        ]);

    }
}
