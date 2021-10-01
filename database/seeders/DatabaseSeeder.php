<?php

namespace Database\Seeders;

use DB;
use Eloquent;
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

        /*Eloquent::unguard();
        $this->call([Phone_brandsTableSeeder::class]);
        $this->command->info('Phone Brand Table Seeder');
        $path = 'app/dev_doc/phone_brands.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Phone Brand Table Seeded!');

        $this->call([Phone_modelsTableSeeder::class]);
        $this->command->info('Phone Model Table Seeder');
        $path = 'app/dev_doc/phone_models.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Phone Model Table Seeded!');*/

        // \App\Models\User::factory(10)->create();
        $this->call([CitiesTableSeeder::class,
                    Commitment_CeilingsTableSeeder::class,
                    Fire_commitment_ceilingsTableSeeder::class,
                    Phone_brandsTableSeeder::class,
                    FlashMessagesSeeder::class,
                    Phone_modelsTableSeeder::class,
                    StatusTableSeeder::class,
                    ImageFieldTableSeeder::class,
                    SettingsTableSeeder::class,
                    NotificationTypeTableSeeder::class,
                    PersmissionSeeder::class,
                    RoleSeeder::class,
                    UsersTableSeeder::class,
                    CategoriesSeeder::class,
                    BrandsSeeder::class,
                    UnitSeeder::class,
                    WarrantyProblemTypeSeeder::class
        ]);

    }
}
