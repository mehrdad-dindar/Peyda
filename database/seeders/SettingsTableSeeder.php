<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
    }
}
