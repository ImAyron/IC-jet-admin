<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => strtoupper(substr($this->faker->text(10), 0, 4)),
            'descricao' => $this->faker->text(100),
            'dataFab' => $this->faker->date(),
        ];
    }
}
