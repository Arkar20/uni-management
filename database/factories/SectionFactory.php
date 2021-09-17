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
            'section_start_date' => Carbon::now(),
            'section_end_date'=>Carbon::now()->addMonths(3)
        ];
    }
}
