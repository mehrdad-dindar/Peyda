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
        $this->call([CitiesTableSeeder::class,
                    Commitment_CeilingsTableSeeder::class,
                    Fire_commitment_ceilingsTableSeeder::class,
                    Phone_brandsTableSeeder::class,
                    FlashMessagesSeeder::class,
                    Phone_modelsTableSeeder::class,
                    UsersTableSeeder::class,
                    StatusTableSeeder::class,
                    ImageFieldTableSeeder::class,
                    SettingsTableSeeder::class,
                    NotificationTypeTableSeeder::class,
                    PersmissionSeeder::class,
                    RoleSeeder::class,
                    CategoriesSeeder::class,
                    BrandsSeeder::class
        ]);
    }
}
