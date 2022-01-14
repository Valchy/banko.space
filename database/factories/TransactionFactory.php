<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    public function definition()
    {
        $account_from = rand(1, 10);

        do {
            $account_to = rand(1, 10);
        } while ($account_to == $account_from);

        return [
            'account_from' => rand(1, 10),
            'account_to' => rand(1, 10),
            'amount' => rand(10, 35)
        ];
    }
}
