<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'f_name'                =>          'مهرداد',
                'l_name'                =>          'دیندار',
                'user_type'             =>          'admin',
                'address'               =>          'نواب - خ زمزم - ک اسلامی',
                'email'                 =>          'mehrdad.replay@gmail.com',
                'password'              =>          Hash::make('mehrdad?3665'),
                'email_verified_at'     =>          '2021-08-10 10:11:03',
            ]
        );
        DB::table('users')->insert(

            [
                'f_name'                =>          'الناز',
                'l_name'                =>          'جباری',
                'user_type'             =>          'admin',
                'email'                 =>          'jabbary.elnaz76@gmail.com',
                'password'              =>          Hash::make('12345678'),
                'email_verified_at'     =>          '2021-08-10 10:11:03',
            ],
        );
    }
}
