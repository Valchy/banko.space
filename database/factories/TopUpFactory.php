<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TopUpFactory extends Factory
{
    public function definition()
    {
        return [
            'amount'     => rand(10, 200),
            'account_id' => rand(1, 5),
        ];
    }
}
