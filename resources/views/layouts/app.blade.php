<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('design/css-design/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('design/css-design/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('design/css-design/yosr.css') }}">
</head>

<body>
    <div id="app">
        @auth
        {{-- superadmin  او  admin لوكان المستخدم  --}}
            @if (auth()->user()->usertype == 'admin' || auth()->user()->usertype == 'superadmin')
                @include('layouts.include.auth_nav')
            @else
                @include('layouts.include.nav') {{-- لوكان المستخدم يوزر عادي --}}

            @endif
        @endauth
        @guest
            @include('layouts.include.nav'){{-- لوكان المستخدم غير مسجل الدخول --}}
        @endguest
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>

</html>
