<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskLabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_labels')->insert([
            ['name' => 'imp-urgent'],
            ['name' => 'imp-not-urgent'],
            ['name' => 'not-imp-urgent'],
            ['name' => 'not-imp-not-urgent']
        ]);
    }
}
