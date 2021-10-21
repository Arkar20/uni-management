<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'address'=>$this->faker->paragraph(),
            'contact_number'=> rand(10000000,99999999),
            'password'=>Hash::make('unimanagementteacher'),
            'nrc'=>rand(10000000,99999999),
            'dob'=>Carbon::now()
        ];
    }
}
