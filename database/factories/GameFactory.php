<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->name,
            'game_year' => date('Y'),
            'price' => $this->faker->randomNumber($nbDigits = 2),
            'quantity' => $this->faker->randomNumber($nbDigits = 2),
            'requirements' => $this->faker->text,
            'platform' => $this->faker->name,
            'image' => 'https://picsum.photos/300/300',
            'category_id' => Category::factory()
        ];
    }
}
