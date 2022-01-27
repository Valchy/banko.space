<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PageLanguage
{
    public function handle(Request $request, Closure $next)
    {
        app()->setLocale('bg');
        return $next($request);
    }
}
