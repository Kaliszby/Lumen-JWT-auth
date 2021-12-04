<?php

namespace Database\Factories;

use App\Models\register;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegisterFactory extends Factory
{
    protected $model = register::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->id,
            'username' => $this->faker->username,
            'password' => app('hash')->make('123456'),
            'role' => $this->faker->role,
        ];
    }
}
