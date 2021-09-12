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
                'name'                =>          'IMEI عکس از',
                'html_id'               =>          'IMEI_pic'
            ]
        );

        DB::table('image_fields')->insert([

            'name'                =>          'عکس از پشت گوشی',
            'html_id'               =>          'back_pic'
        ]);

        DB::table('image_fields')->insert([

            'name'                =>          'عکس از روی صفحه به همراه QR',
            'html_id'               =>          'front_pic'
        ]);

        DB::table('image_fields')->insert([

            'name'                =>          'عکس از کناره سمت راست گوشی',
            'html_id'               =>          'right_pic'
        ]);

        DB::table('image_fields')->insert([

            'name'                =>          'عکس از کناره سمت چپ گوشی',
            'html_id'               =>          'back_pic'
        ]);

        DB::table('image_fields')->insert([

            'name'                =>          'عکس از روی جعبه',
            'html_id'               =>          'front_box_pic'
        ]);

        DB::table('image_fields')->insert([

            'name'                =>          'عکس از پشت جعبه',
            'html_id'               =>          'back_box_pic'
        ]);


    }
}
