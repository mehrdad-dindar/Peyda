<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Unit::query()->create([
            'name'=>'فنی',
        ]);


        Unit::query()->insert([
            'name'=>'مالی',
        ]);

    }
}
