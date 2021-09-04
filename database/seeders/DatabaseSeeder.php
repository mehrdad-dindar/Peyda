<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(Commitment_CeilingsTableSeeder::class);
        $this->call(Fire_commitment_ceilingsTableSeeder::class);
        $this->call(Phone_brandsTableSeeder::class);
        $this->call(Phone_modelsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
    }
}
