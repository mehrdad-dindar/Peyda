<?php

namespace Database\Seeders;

use App\Models\WarrantyProblemType;
use Illuminate\Database\Seeder;

class WarrantyProblemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        WarrantyProblemType::query()->create([
            'name'=>'تایید',
            'data_value'=>3
        ]);

        WarrantyProblemType::query()->insert([
            'name'=>'نقص مدارک',
            'data_value'=>0
        ]);

        WarrantyProblemType::query()->insert([
            'name'=>'نقص اطلاعات (کاربر بدهکار)',
            'data_value'=>1
        ]);

        WarrantyProblemType::query()->insert([
            'name'=>'نقص اطلاعات (کاربر بستانکار)',
            'data_value'=>2
        ]);

        WarrantyProblemType::query()->insert([
            'name'=>'نقص مدارک + کاربر بدهکار',
            'data_value'=>1
        ]);

        WarrantyProblemType::query()->insert([
            'name'=>'نقص مدارک + کاربر بستانکار',
            'data_value'=>2
        ]);

    }
}
