<?php

namespace Database\Factories;

use App\Models\PartnerAndClient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PartnerAndClient>
 */
class PartnerAndClientFactory extends Factory
{
    protected $model = PartnerAndClient::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->name(),
            'image' => $this->faker->imageUrl(100, 100, 'people' , true),
            'type' => $this->faker->randomElement(['partner', 'client']),
        ];
    }
}
