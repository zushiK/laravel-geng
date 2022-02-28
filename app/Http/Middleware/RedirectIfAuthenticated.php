<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    private const GUARD_CUSTOMER = 'customer';

    private const GUARD_OPERATOR = 'operator';

    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::guard(self::GUARD_CUSTOMER)->check() && $request->routeIs('customer.*')) {
            return redirect(RouteServiceProvider::CUSTOMER_HOME);
        }
        if (Auth::guard(self::GUARD_OPERATOR)->check() && $request->routeIs('operator.*')) {
            return redirect(RouteServiceProvider::OPERATOR_HOME);
        }

        return $next($request);
    }
}
