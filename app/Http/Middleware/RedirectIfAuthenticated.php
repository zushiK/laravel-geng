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
    
    private const GUARD_ECCUBE_CUSTOMER = 'eccube_customer';

    public function handle(Request $request, Closure $next, ...$guards)
    {
        // ECCUBE認証ユーザの処理も必要
        if (Auth::guard(self::GUARD_ECCUBE_CUSTOMER)->check()) {
            return redirect(RouteServiceProvider::ECCUBE_MIGRATE);
        }

        if (Auth::guard(self::GUARD_CUSTOMER)->check() && $request->routeIs('customer.*')) {
            return redirect(RouteServiceProvider::CUSTOMER_HOME);
        }

        if (Auth::guard(self::GUARD_OPERATOR)->check() && $request->routeIs('operator.*')) {
            return redirect(RouteServiceProvider::OPERATOR_HOME);
        }

        return $next($request);
    }
}
