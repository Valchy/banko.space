<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Transaction;
use App\Models\Account;
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
        Transaction::factory(5)->create();
        return 0;
    }
}
