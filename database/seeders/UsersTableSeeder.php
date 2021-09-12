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
                'city_id'               =>          1,
                'address'               =>          'نواب - خ زمزم - ک اسلامی',
                'postal_code'           =>          '1234567890',
                'phone_num'             =>          '09191903665',
                'melli_code'            =>          '0016209400',
                'birthday'              =>          '1993-10-04 00:11:22',
                'phone_model_id'        =>          1,
                'email'                 =>          'mehrdad.replay@gmail.com',
                'password'              =>          Hash::make('mehrdad?3665'),
                'email_verified_at'     =>          '2021-08-10 10:11:03',
                'status'                =>          '1',
            ]
        );
        DB::table('wallets')->insert(
            [
                'user_id' => 1,
                'value' => "eyJpdiI6ImNGQ0tCZnpMRWhIUzA1N1ZKRVNiVlE9PSIsInZhbHVlIjoic2o5ZHBIMThneGw3NWFqTXplYTVvUT09IiwibWFjIjoiMTFiNDA1NmExMGMxNDZlMjk2NTdmYTIwNTJiMmM4Zjk3ZGE4ZWY4ZWJhZDI4NWE3ZjI3NjNkNmZhYjVhZjA2MyIsInRhZyI6IiJ9",
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
