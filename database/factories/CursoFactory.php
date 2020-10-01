<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
     
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'category'=>$this->faker->randomElement(['Desarollo web', 'Diseño Web', 'Publicidad']),
            'teacher'=>$this->faker->randomElement(['Marco A Yanez', 'Mario A Yanez', 'Carmen Espinoza'])

        ];
    }
}

