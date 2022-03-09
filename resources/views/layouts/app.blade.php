<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

@if (Request::routeIs('operator.*'))
    {{-- 管理画面 --}}

    <body class="bg-pink-50 bg-opacity-50 ">
        <div id="app">
            <!-- Page Header -->
            @include('layouts.operator.header')

            <div class="flex px-8">
                <!-- Page Sidebar -->
                @include('layouts.operator.sidebar')

                <!-- Page Content -->
                <main class="w-4/5 mx-auto">
                    {{ $slot }}
                </main>
            </div>


            <!-- Page Header -->
            @include('layouts.operator.footer')
        </div>
    </body>
@else
    {{-- フロント --}}

    <body>
        <div id="app">
            <!-- Page Header -->
            @include('layouts.customer.header')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Page Header -->
            @include('layouts.customer.footer')
        </div>
    </body>
@endif

</html>
