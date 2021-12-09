<?php

namespace App\Http\Middleware;

use Closure;

class ViewScopePath
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
        $viewScopePath = config('view.frontend');

        if (
            $request->is('login') ||
            $request->is('admin') ||
            $request->is('admin/*')
        ) {
            $viewScopePath = config('view.backend');
        }

        view()->addLocation($viewScopePath);

        return $next($request);
    }
}
