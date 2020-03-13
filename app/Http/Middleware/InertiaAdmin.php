<?php

namespace App\Http\Middleware;

use Closure;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;


class InertiaAdmin
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
        Inertia::setRootView('layouts.admin.layout');
        Inertia::share('paths', function () {
            return [
                'url' => url(''),
                'asset' => asset('')
            ];
        });
        Inertia::share('user', function() {
            return Auth::user();
        });
        return $next($request);
    }
}
