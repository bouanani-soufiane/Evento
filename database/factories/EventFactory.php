<?php

namespace Database\Factories;

use App\Enums\ReservationTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2, true),
            'slug' => Str::slug($this->faker->unique()->sentence(3, true)),
            'description' => $this->faker->paragraph,
            'localisation' => $this->faker->country ,
            'date' => $this->faker->dateTimeBetween('+0 days','+2 weeks'),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'totalPlace' => $this->faker->numberBetween(1, 100),
            'isFull' => false,
            'isVerified' => true,
            'reservationType' => $this->faker->randomElement(ReservationTypeEnum::cases())->value,
        ];
    }
}
