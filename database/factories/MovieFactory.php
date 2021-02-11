<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Movie;
use App\Models\Category;
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
            'gender' => $this->faker->name,
            'language' => $this->faker->name,
            'price' => $this->faker->randomNumber($nbDigits = 2),
            'quantity' => $this->faker->randomNumber($nbDigits = 2),
            'production' => date('Y'),
            'duration' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'qualification' => 25,
            'premiere' => date('Y-m-d'),
            'summary' => $this->faker->text,
            'image' => 'https://picsum.photos/300/300',
            'actor_id' => Actor::factory(),
            'category_id' => Category::factory()
        ];
    }
}
