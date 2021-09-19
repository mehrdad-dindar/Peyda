<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('brands')->insert(

            [
                'name'                =>          'Samsung',
                'image'                =>          '',
            ]
        );
    }
}
