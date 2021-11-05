<?php

namespace Database\Factories;

use App\Models\Antena;
use Illuminate\Database\Eloquent\Factories\Factory;

class AntenaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Antena::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'local' => $this->faker->text(100),
            'codigo' => strtoupper(substr($this->faker->text(10), 0, 4))
        ];
    }
}
