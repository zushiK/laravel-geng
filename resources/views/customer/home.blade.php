homedesu

<div>{{ Auth::user()->name }}</div>
<div>{{ Auth::user()->email }}</div>

<div>

    <!-- Authentication -->
    <form method="POST" action="{{ route('customer.logout') }}">
        @csrf

        <a href="route('customer.logout')" onclick="event.preventDefault();
                          this.closest('form').submit();">
            {{ __('Log Out') }}
        </a>
    </form>
</div>
