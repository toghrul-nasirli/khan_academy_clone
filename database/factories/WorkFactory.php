<?php

namespace Database\Factories;

use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    protected $model = Work::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'info' => $this->faker->text,
        ];
    }
}
