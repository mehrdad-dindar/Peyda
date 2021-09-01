<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Commitment_CeilingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commitment_ceilings')->insert(

            [
                'price_range'                =>          '2 میلیون تومان - 3 میلیون تومان',
                'price'                =>          '250000',
            ],
        );
        DB::table('commitment_ceilings')->insert(

            [
                'price_range'                =>          '3 میلیون تومان - 5 میلیون تومان',
                'price'                =>          '400000',
            ],
        );
        DB::table('commitment_ceilings')->insert(

            [
                'price_range'                =>          '5 میلیون تومان - 7 میلیون تومان',
                'price'                =>          '650000',
            ],
        );
        DB::table('commitment_ceilings')->insert(

            [
                'price_range'                =>          '7 میلیون تومان - 10 میلیون تومان',
                'price'                =>          '900000',
            ],
        );
        DB::table('commitment_ceilings')->insert(

            [
                'price_range'                =>          '10 میلیون تومان - 15 میلیون تومان',
                'price'                =>          '1450000',
            ],
        );
        DB::table('commitment_ceilings')->insert(

            [
                'price_range'                =>          '15 میلیون تومان - 20 میلیون تومان',
                'price'                =>          '1990000',
            ],
        );
        DB::table('commitment_ceilings')->insert(

            [
                'price_range'                =>          'بیش از 20 میلیون تومان',
                'price'                =>          '4999000',
            ],
        );
    }
}
