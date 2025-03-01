<?php

namespace Database\Factories;

use App\Models\Cidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class CidadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cidade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //parametrisando os tipos de dados falsos a serem inseridos automaticamente
        return [
            'nome_da_cidade' => $this->faker->city(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude()
        ];
    }
}
