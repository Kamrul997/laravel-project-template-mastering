<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate and insert sample data
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tasks')->insert([
                'name' => $faker->name,
                'details' => $faker->sentence,
                'assign_to' => $faker->name,
                'assign_date' => $faker->date(),
                'status' => $faker->randomElement(['incomplete', 'complete']),
            ]);
        }
    }
}
