<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Fire_commitment_ceilingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '50 میلیون تومان',
                'price'                =>          '100000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '100 میلیون تومان',
                'price'                =>          '160000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '150 میلیون تومان',
                'price'                =>          '230000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '250 میلیون تومان',
                'price'                =>          '350000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '350 میلیون تومان',
                'price'                =>          '420000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '450 میلیون تومان',
                'price'                =>          '445000',
            ],
        );
    }
}
