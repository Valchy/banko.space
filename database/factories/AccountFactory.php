<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    public function definition()
    {
        static $order = 1;

        return [
            'username' => $this->faker->userName(),
            'account_balance' => rand(100, 500),
            'user_id' => $order++
        ];
    }
}
