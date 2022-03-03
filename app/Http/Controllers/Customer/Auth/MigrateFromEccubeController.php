<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class MigrateFromEccubeController extends Controller
{
    /**
     * ECCUBEからの移行ページへ
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('customer.auth.migrate');
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'accepted' => ['required', 'accepted'],
        ]);

        $user = $request->user();

        $this->logout($request);

        $user->update([
            'new_password' => Hash::make($request->password),
        ]);
        
        // 指定しないとauth.phpのdefaultが呼ばれる
        Auth::guard('customer')->login($user);

        return redirect(RouteServiceProvider::CUSTOMER_HOME);
    }

    /**
     * ECCUBE認証ユーザーをアプリケーションからログアウトさせる
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function logout(Request $request)
    {
        Auth::logout('eccube_customer');

        $request->session()->invalidate();

        $request->session()->regenerateToken();
    }
}
