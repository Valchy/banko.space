<?php

namespace App\Console\Commands;

use App\Models\Account;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class InitialSeed extends Command
{
    protected $signature = 'bs:seed';
    protected $description = 'Seeding initially my application';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $customers = collect([
            ['username' => 'Valeri Sabev', 'name' => 'Valeri Sabev', 'is_admin' => true, 'email' => 'valerisabev.com@gmail.com'],
            ['username' => 'Valchy', 'name' => 'Valchy', 'is_admin' => true, 'email' => 'valchygaming@gmail.com'],
            ['username' => 'Marchoo', 'name' => 'Mario G', 'is_admin' => true, 'email' => 'mario@bankospace.com'],
            ['username' => 'Adel01', 'name' => 'Adel', 'is_admin' => false, 'email' => 'adel@bankospace.com'],
            ['username' => 'Anier8', 'name' => 'Anier', 'is_admin' => false, 'email' => 'anier@bankospace.com'],
            ['username' => 'Ariel2', 'name' => 'Ariel', 'is_admin' => false, 'email' => 'ariel@bankospace.com'],
            ['username' => 'Israa333', 'name' => 'Israa', 'is_admin' => false, 'email' => 'israa@bankospace.com'],
            ['username' => 'Mathias7', 'name' => 'Mathias', 'is_admin' => false, 'email' => 'mathias@bankospace.com'],
            ['username' => 'Mazen11', 'name' => 'Mazen', 'is_admin' => false, 'email' => 'mazen@bankospace.com'],
            ['username' => 'Miguel5', 'name' => 'Miguel', 'is_admin' => false, 'email' => 'miguel@bankospace.com'],
            ['username' => 'Nika6', 'name' => 'Nika', 'is_admin' => false, 'email' => 'nika@bankospace.com'],
            ['username' => 'Reham4', 'name' => 'Reham', 'is_admin' => false, 'email' => 'reham@bankospace.com'],
            ['username' => 'Umaima23', 'name' => 'Umaima', 'is_admin' => false, 'email' => 'umaima@bankospace.com'],
            ['username' => 'Victor98', 'name' => 'Victor', 'is_admin' => false, 'email' => 'victor@bankospace.com'],
            ['username' => 'Yuri123', 'name' => 'Yuri', 'is_admin' => false, 'email' => 'yuri@bankospace.com'],
        ]);

        foreach ($customers as $customer) {
            $newAccount = Account::create([
                'username'        => $customer['username'],
                'account_balance' => 50,
            ]);

            $user = User::create([
                'name'       => $customer['name'],
                'email'      => $customer['email'],
                'password'   => Hash::make('password'),
                'account_id' => $newAccount->id,
                'is_admin'   => $customer['is_admin'],
            ]);

            $newAccount->user_id = $user->id;
            $newAccount->save();
        }

        return 0;
    }
}
