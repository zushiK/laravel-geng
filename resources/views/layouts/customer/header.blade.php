<header>
    <div class=" bg-gray-500">私はヘッダーです。</div>
    @php
        // dump(auth()->user());
    @endphp
    <div>
        @auth('customer')
            <form method="POST" action="{{ route('customer.logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('customer.logout')"
                    onclick="event.preventDefault();
                                                                                                                this.closest('form').submit();">
                    ログアウトする
                </x-responsive-nav-link>
            </form>
        @else
            <x-button>
                <a class="text-xl text-fuchsia-800" href="{{ route('customer.login') }}">ログインする</a>
            </x-button>
            <x-button>
                <a class="text-xl text-white" href="{{ route('customer.register') }}">新規登録</a>
            </x-button>
        @endauth
    </div>
</header>
