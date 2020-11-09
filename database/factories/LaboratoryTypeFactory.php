<?php

namespace Database\Factories;

use App\Domain\LaboratoryTypes\Models\LaboratoryType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LaboratoryTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LaboratoryType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug,
            'type' => $this->faker->mimeType
        ];
    }
}
