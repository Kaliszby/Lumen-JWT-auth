<?php

namespace Database\Factories;

use App\Models\mock_data;
use Illuminate\Database\Eloquent\Factories\Factory;

class mock_dataFactory extends Factory
{
    protected $model = mock_data::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->id,
            'first_name' => $this->faker->first_name,
            'last_name' => $this->faker->last_name,
            'email' => $this->faker->email,
            'gender' => $this->faker->gender,
            'ip_address' => $this->faker->ip_address,
            'image_path' => $this->faker->image_path,
        ];
    }
}
