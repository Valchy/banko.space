<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PageLanguage
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        } else {
            app()->setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
