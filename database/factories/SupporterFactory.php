<?php

namespace Database\Factories;

use App\Models\Supporter;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupporterFactory extends Factory
{
    protected $model = Supporter::class;

    public function definition()
    {
        return [
            'covid_19' => $this->faker->boolean,
            'logo' => $this->faker->imageUrl,
        ];
    }
}
