<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Section;
use App\Models\Teacher;
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

        Section::factory(100)->create();
        Teacher::factory(100)->create();

        Course::factory(100)->create();


    }
}
