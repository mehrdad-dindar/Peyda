<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class FlashMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flash_messages')->insert(
            [
                'title'                =>          'AdminWarranty_create_success',
                'value'                =>          'فراگارانتی با موفقیت افزوده شد.'
            ]);
        DB::table('flash_messages')->insert(
            [
                'title'                =>          'AdminWarranty_create_fail',
                'value'                =>          'خطا در افزودن فراگارانتی!'
            ]);
    }
}
