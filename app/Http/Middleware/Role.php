<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (auth()->check() && in_array(auth()->user()->role, $roles)) {
            return $next($request);
        }

        if (auth()->check()) {
            switch (auth()->user()->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'owner':
                    return redirect()->route('owner.dashboard');
                case 'user':
                    return redirect()->route('user.dashboard');
                default:
                    abort(401, 'Unauthorized action.');
            }
        }

        abort(401, 'Unauthorized action.');
    }
}
