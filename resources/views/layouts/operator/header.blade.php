<header>
    <nav id="header" class="w-full z-30 top-0 py-1 bg-gray-300">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />


            <div class="order-1 md:order-2 ">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl"
                    href="{{ route('operator.home') }}">
                    🐕NBCLaravel😸
                </a>

            </div>

            <div class="order-2 md:order-3 flex items-center ml-auto" id="nav-content">
                <form method="POST" action="{{ route('operator.logout') }}">
                    @csrf
                    <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                        href="{{ route('operator.logout') }}"
                        onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a>

                </form>


            </div>
        </div>
    </nav>
</header>
