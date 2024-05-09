<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfWww
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the request's host starts with 'www.'
        if (Str::startsWith($request->getHttpHost(), 'www.')) {
            // Remove the 'www.' prefix from the host
            $host = Str::replaceFirst('www.', '', $request->getHttpHost());

            // Generate the URL without the 'www.' prefix
            $url = $request->getScheme() . '://' . $host . $request->getRequestUri();

            // Redirect to the new URL
            return redirect()->away($url, 301);
        }

        return $next($request);
    }
}
