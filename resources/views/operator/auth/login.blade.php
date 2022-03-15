<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img src="{{ asset('img/logo.svg') }}" alt="" class="w-40">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('operator.login') }}">
            @csrf

            <!-- Email Address -->
            <div>

                <x-input id="login_id" class="block mt-1 w-full" type="text" name="login_id" :value="old('login_id')"
                    required autofocus>
                    ログインID
                </x-input>

            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password">
                    パスワード
                </x-input>
            </div>

            <!-- Remember Me -->
            {{-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                <x-button-submit>
                    ログイン
                </x-button-submit>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
