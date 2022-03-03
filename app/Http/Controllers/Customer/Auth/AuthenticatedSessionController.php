<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // ログイン後は元いたページに飛ばす
        $prev_url = $_SERVER['HTTP_REFERER'] ?? null;
        session(['url.intended' => $prev_url]);
        redirect()->setIntendedUrl($prev_url) ;
        return view('customer.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // ECCUBE認証で通った場合移行ページにリダイレクトさせる
        if (Auth::guard('eccube_customer')->check()) {
            return redirect(RouteServiceProvider::ECCUBE_MIGRATE);
        }

        return redirect()->intended(RouteServiceProvider::CUSTOMER_HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(RouteServiceProvider::CUSTOMER_HOME);
    }
}
