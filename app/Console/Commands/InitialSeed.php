<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitialSeed extends Command
{
    protected $signature = 'initial:seed';
    protected $description = 'Seeding initially my application';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        return 0;
    }
}
