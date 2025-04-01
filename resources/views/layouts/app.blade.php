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
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    @stack('styles')
</head>
<body>
   @yield('content')

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="{{ mix('js/app.js') }}"></script>
   @livewireScripts
   @stack('scripts')
</body>
</html>