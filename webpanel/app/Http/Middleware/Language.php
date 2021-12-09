<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the first segment matches a language code
        if (
            !$request->is('login*') &&
            !$request->is('logout*') &&
            !$request->is('admin*') &&
            !in_array($request->segment(1), config('translatable.locales'))
        ) {

            // Store segments in array
            $segments = $request->segments();

            // Set the default language code as the first segment
            $segments = \Arr::prepend($segments, config('app.fallback_locale'));

            // Redirect to the correct url
            return redirect()->to(implode('/', $segments));
        }

        return $next($request);
    }
}
