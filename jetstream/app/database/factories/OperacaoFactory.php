<?php

namespace Database\Factories;

use App\Models\Operacao;
use App\Models\Antena;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperacaoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Operacao::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo' => $this->faker->randomDigit(),
            'antena_id' => Antena::factory(),
            'tag_id' => Tag::factory(),
            'user_id' => User::factory(),
        ];
    }
}
