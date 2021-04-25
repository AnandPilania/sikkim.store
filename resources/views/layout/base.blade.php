<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') {{ $title }} - {{ config('app.name') }}</title>
        <meta name="description" content=" Sikkim's e-commerce store. Multi-vendor, Multi-tenant. No commissions and no hidden charges. Empowering local shops and sellers.">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    </head>

    <body class="font-sans antialiased">

        {{ $slot }}

        <!-- Scripts -->
        <script src="{{ mix('js/main.js') }}" defer></script>

        @if(!request()->routeIs('home'))
            @livewireScripts
        @endif
        {{ $script }}
    </body>
</html>
