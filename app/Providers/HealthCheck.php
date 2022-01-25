<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;

class CacheHealthCheck extends ServiceProvider
{
    public function register()
    {
        //
    }
    
    public function boot()
    {
        Health::checks([
            CacheCheck::new(),
            UsedDiskSpaceCheck::new(),
            DatabaseCheck::new(),
        ]);
    }
}
