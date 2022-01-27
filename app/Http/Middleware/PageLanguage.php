<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PageLanguage
{
    public function handle(Request $request, Closure $next)
    {
        // app()->setLocale('bg');
        // session()->get('session_fancy_name');
        // make lang with session

        return $next($request);
    }
}
