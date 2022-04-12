<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            ExcerciseSeeder::class,
            MealSeeder::class,
            QuizeSeeder::class,
            TaskLoggerSeeder::class,
            TaskScheduleSeeder::class,
            TaskSeeder::class,
            TaskLabelSeeder::class,
            UserSeeder::class
        ]);
    }
}
