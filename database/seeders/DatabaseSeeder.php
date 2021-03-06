<?php

namespace Database\Seeders;

use App\Models\Staff;
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
        \App\Models\User::factory(10)->create();

        
        Teacher::factory(10)->create();
        Course::factory(10)->create();
        Section::factory(20)->create();
        Staff::factory(10)->create();


    }
}
