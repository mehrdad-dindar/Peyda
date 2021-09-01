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
                'addition_price'                =>          '10 میلیون تومان',
                'price'                =>          '150000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '20 میلیون تومان',
                'price'                =>          '300000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '30 میلیون تومان',
                'price'                =>          '450000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '40 میلیون تومان',
                'price'                =>          '600000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '50 میلیون تومان',
                'price'                =>          '750000',
            ],
        );
        DB::table('fire_commitment_ceilings')->insert(

            [
                'addition_price'                =>          '60 میلیون تومان',
                'price'                =>          '900000',
            ],
        );
    }
}
