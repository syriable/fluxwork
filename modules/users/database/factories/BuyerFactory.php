<?php

namespace Modules\Users\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Users\Models\Buyer;
use Modules\Users\States\Account\Active;

/**
 * @extends Factory<Buyer>
 */
class BuyerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Buyer>
     */
    protected $model = Buyer::class;

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
        return [
            'username' => preg_replace('/[^\w]/', '', strtolower(fake()->unique()->userName())),
            'display_name' => fake()->name(),
            'locale' => fake()->locale(),
            'timezone' => fake()->timezone(),
            'currency' => fake()->currencyCode(),
            'country' => fake()->country(),
            'email' => fake()->unique()->safeEmail(),
            'account_state' => Active::class,
            'email_verified_at' => now(),
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

    public function suspended(): static
    {
        return $this->state(fn (array $attributes) => [
            'suspended_at' => now(),
            'suspension_reason' => fake()->sentence(),
        ]);
    }

    public function lastLogin(): static
    {
        return $this->state(fn (array $attributes) => [
            'last_login_at' => now(),
            'last_login_ip' => fake()->ipv4(),
        ]);
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'account_state' => Active::class,
        ]);
    }
}
