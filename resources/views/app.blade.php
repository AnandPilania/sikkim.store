<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ? 'Sikkim Store - '.$title : 'Sikkim Store' }}</title>
        <meta name="description" content=" Sikkim's e-commerce store. Multi-vendor, Multi-tenant. No commissions and no hidden charges. Empowering local shops and sellers.">

        <!-- Icons -->
        <link rel="icon" href="{{ asset('favicon.png') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="prefetch" as="style">

        <!-- Mix -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Ziggy -->
        @routes
    </head>
    <body class="antialiased">
        @inertia
    </body>
</html>
