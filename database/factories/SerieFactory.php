<?php

namespace Database\Factories;

use App\Models\Serie;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Serie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'season' => $this->faker->name,
            'language' => $this->faker->name,
            'price' => $this->faker->randomNumber($nbDigits = 2),
            'quantity' => $this->faker->randomNumber($nbDigits = 2),
            'chapter' => $this->faker->name,
            'premiere' => date('Y'),
            'gender' => 'Gender ',
            'image' => 'https://picsum.photos/300/300',
            'category_id' => Category::factory()
        ];
    }
}
