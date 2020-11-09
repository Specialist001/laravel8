<?php

namespace Database\Factories;

use App\Domain\Users\Model\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'login' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$Z9L4IDOm6GsDdg7O0stcYuAmgF1uSBCreDIDvbi2TXPaTzHn94q6u',
            'remember_token' => Str::random(10),
            'active' => 1
        ];
    }
}
