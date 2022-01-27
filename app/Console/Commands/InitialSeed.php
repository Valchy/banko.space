<?php

namespace App\Console\Commands;

use App\Models\Account;
use App\Models\TopUp;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Console\Command;

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
        User::factory(10)->create();
        Account::factory(10)->create();
        Account::all()->pluck('user')->pluck('email');

        User::factory(1)->create();
        $admin = User::latest()->first();
        $admin->update([
            'is_admin' => true,
            'name'     => 'Valeri Sabev',
            'email'    => 'valerisabev.com@gmail.com',
        ]);

        Transaction::factory(50)->create();
        TopUp::factory(10)->create();

        return 0;
    }
}
