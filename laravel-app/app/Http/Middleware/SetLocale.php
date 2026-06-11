<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $locale = 'en'): Response
    {
        App::setLocale($locale);
        session(['locale' => $locale]);

        return $next($request);
    }
}
