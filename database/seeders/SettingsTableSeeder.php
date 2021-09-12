<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                'title'                =>          'public_URL',
                'value'                =>          'http://localhost/bdel/public_html/'
            ]
        );

        DB::table('settings')->insert(
            [
                'title'                =>          'URL',
                'value'                =>          'http://localhost:8000/'
            ]
        );
    }
}
