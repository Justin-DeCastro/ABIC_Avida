<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session; // Import the Session facade

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the locale session variable is not null
        if (Session::get("locale") !== null) {
            // Set the application locale based on the session value
            app()->setLocale(Session::get("locale"));
        } else {
            // If the locale session variable is null, set it to "en" (English)
            Session::put("locale", "en");
            app()->setLocale(Session::get("locale"));
        }

        return $next($request);
    }
}
