<?php

namespace Database\Factories;

use App\Models\Artisan;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reclamation>
 */
class ReclamationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'message'=>  $this->faker->sentence(),
        'status' =>null,
        'artisan_id' => Artisan::factory()->create(),
        'client_id' => Client::factory()->create(),
        ];
    }
}