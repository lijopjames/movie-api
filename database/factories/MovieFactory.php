<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'year' => $this->faker->year,
            'date' => $this->faker->dateTime,
            'genre' => $this->faker->text,
            'director' => $this->faker->name,
            'plot' => $this->faker->text,
            'poster' => $this->faker->text,
        ];
    }
}
