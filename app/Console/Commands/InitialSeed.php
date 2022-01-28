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
        $customers = collect([                                                                     // Hey github check out this awesome password :P
            ['username' => 'Valeri Sabev', 'name' => 'Valeri Sabev', 'is_admin' => true, 'email' => 'valerisabev.com@gmail.com', 'password' => 'coolpass'],
            ['username' => 'Valchy', 'name' => 'Valchy', 'is_admin' => true, 'email' => 'valchygaming@gmail.com', 'password' => 'coolpass'],
            ['username' => 'Marchoo', 'name' => 'Mario G', 'is_admin' => true, 'email' => 'mario@bankospace.com', 'password' => 'tisigay'],
            ['username' => 'Adel01', 'name' => 'Adel', 'is_admin' => false, 'email' => 'adel@bankospace.com', 'password' => 'password'],
            ['username' => 'Anier8', 'name' => 'Anier', 'is_admin' => false, 'email' => 'anier@bankospace.com', 'password' => 'password'],
            ['username' => 'Ariel2', 'name' => 'Ariel', 'is_admin' => false, 'email' => 'ariel@bankospace.com', 'password' => 'password'],
            ['username' => 'Israa333', 'name' => 'Israa', 'is_admin' => false, 'email' => 'israa@bankospace.com', 'password' => 'password'],
            ['username' => 'Mathias7', 'name' => 'Mathias', 'is_admin' => false, 'email' => 'mathias@bankospace.com', 'password' => 'password'],
            ['username' => 'Mazen11', 'name' => 'Mazen', 'is_admin' => false, 'email' => 'mazen@bankospace.com', 'password' => 'password'],
            ['username' => 'Miguel5', 'name' => 'Miguel', 'is_admin' => false, 'email' => 'miguel@bankospace.com', 'password' => 'password'],
            ['username' => 'Nika6', 'name' => 'Nika', 'is_admin' => false, 'email' => 'nika@bankospace.com', 'password' => 'password'],
            ['username' => 'Reham4', 'name' => 'Reham', 'is_admin' => false, 'email' => 'reham@bankospace.com', 'password' => 'password'],
            ['username' => 'Umaima23', 'name' => 'Umaima', 'is_admin' => false, 'email' => 'umaima@bankospace.com', 'password' => 'password'],
            ['username' => 'Victor98', 'name' => 'Victor', 'is_admin' => false, 'email' => 'victor@bankospace.com', 'password' => 'password'],
            ['username' => 'Yuri123', 'name' => 'Yuri', 'is_admin' => false, 'email' => 'yuri@bankospace.com', 'password' => 'password']
        ]);

        foreach ($customers as $customer) {
            $newAccount = Account::create([
                'username'        => $customer['username'],
                'account_balance' => 50,
            ]);
    
            $user = User::create([
                'name'       => $customer['name'],
                'email'      => $customer['email'],
                'password'   => Hash::make($customer['password']),
                'account_id' => $newAccount->id,
                'is_admin'   => $customer['is_admin']
            ]);
    
            $newAccount->user_id = $user->id;
            $newAccount->save();
        }

        return 0;
    }
}
