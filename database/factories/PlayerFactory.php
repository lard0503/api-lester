<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'player_id' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'birth_date' => $this->faker->date(),
            'team' => $this->faker->randomElement(['Real Madrid', 'Fraudelona', 'Atletico Madrid', 'Galatasaray', 'Bayern Munich', 'Borussia Dortmund', 'Paris Saint-Germain', 'Manchester City', 'Liverpool', 'Chelsea']),
            'position' => $this->faker->randomElement(['Portero', 'Defensa', 'Medio', 'Delantero']),
            'number' => $this->faker->numberBetween(1, 99),
        ];
    }
}
