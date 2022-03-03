<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    protected string $customer_route = 'customer.login';

    protected string $operator_route = 'operator.login';

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (Route::is('customer.*')) {
                return route($this->customer_route);
            } elseif (Route::is('operator.*')) {
                return route($this->operator_route);
            }
        }
    }
}
