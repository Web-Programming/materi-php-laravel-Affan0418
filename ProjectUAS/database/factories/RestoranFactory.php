<?php

namespace Database\Factories;

use App\Models\Restoran; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restoran>
 */
class RestoranFactory extends Factory
{
    protected $model = Restoran::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'image' => 'http://placehold.it/500x300&text=No+Image',
            'address' => $this->faker->streetAddress(),
        ];
    }
}
