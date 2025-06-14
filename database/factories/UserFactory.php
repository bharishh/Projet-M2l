<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $chosenCivility = fake()->randomElement(['homme', 'femme']);
        $firstName = ($chosenCivility === 'homme') ? fake()->firstNameMale() : fake()->firstNameFemale();
        return [
            'nom' => fake()->name(),
            'prenom' => fake()->name(),
            'telephone' => fake()->phoneNumber(),
            'civility' => $chosenCivility,
            'categorie' => fake()->jobTitle(),
            'ville' => fake()->city(),
            'pays' => fake()->country(),
            'date_naissance' => fake()->date(),
            'age'=>fake()->numberBetween(18, 65),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'image' => fake()->imageUrl(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];

    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
