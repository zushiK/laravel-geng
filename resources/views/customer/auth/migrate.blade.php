<x-guest-layout>
    <h1 class=" text-xl">
        移行ページ
        利用規約に同意

        新しいパスワードを入力してもらう

    </h1>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('customer.migrate') }}">
            @csrf

            <!-- Email Address -->
            {{-- <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email', $request->email)" required autofocus />
            </div> --}}


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" value='パスワード' />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" value="パスワード（確認）" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <!-- 利用規約 -->
            <div class="mt-4">

                <div>
                    利用規約
                    利用規約
                    利用規約
                    利用規約
                    利用規約
                    利用規約
                    利用規約
                    利用規約
                    利用規約
                    利用規約
                    利用規約
                </div>
                <div class="block mt-4">
                    <label for="accepted" class="inline-flex items-center">
                        <input id="accepted" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="accepted">
                        <span class="ml-2 text-sm text-gray-600">利用規約に同意する</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('パスワードを再設定する') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>
