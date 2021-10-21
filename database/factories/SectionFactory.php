<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name'=>$this->faker->word(),
            'desc' => $this->faker->sentence(),
            'course_id'=>rand(1,10)
        ];
    }
}
