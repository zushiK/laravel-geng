<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('customer.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string' , 'email', 'max:255' ,'unique:dtb_customer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // とりあえず登録できるように
        $user = Customer::create([
            'name01' => $request->name,
            'name02' => $request->name,
            'email' => $request->email,
            'password' => '',
            'new_password' => Hash::make($request->password),
            'secret_key' => 0,
            'nbc_basic_code' => 0,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::CUSTOMER_HOME);
    }
}
