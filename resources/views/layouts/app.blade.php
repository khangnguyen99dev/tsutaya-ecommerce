<!DOCTYPE html>
<html lang="en" class="color-two font-exo">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>{{ config('app.name', 'MarketPro') }} - @yield('title', 'E-commerce HTML5 Tailwind CSS Template')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.png') }}">
    <!-- Styles -->
    @vite(['resources/css/client/app.css', 'resources/css/client/main.scss', 'resources/js/client/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body>
    <!-- Header -->
    @include('layouts.partials.header')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.partials.footer')

   @livewireScripts
   @stack('scripts')
</body>
</html>