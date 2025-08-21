<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('meal_types')->insert([
            ['id' => 1, 'name' => 'breakfast', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'lunch', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'dinner', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
