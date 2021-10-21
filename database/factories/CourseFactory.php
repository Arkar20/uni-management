<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'desc' => $this->faker->paragraph(),
            'teacher_id'=>rand(1,10),
            'start_date'=>Carbon::now(),
            'end_date'=>Carbon::now()->addMonths(3),
            'price'=>rand(1,10),
            'major'=>"Civil",
        ];
    }
}
