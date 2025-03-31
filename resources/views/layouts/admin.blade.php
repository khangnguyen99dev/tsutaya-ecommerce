<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <!-- Admin Navigation -->
        <nav class="bg-white border-b border-gray-100">
            <!-- Add your admin navigation here -->
        </nav>

        <!-- Sidebar -->
        <div class="flex">
            <div class="w-64 bg-gray-800 min-h-screen">
                <!-- Add your sidebar menu here -->
            </div>

            <!-- Main Content -->
            <main class="flex-1 p-8">
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts
</body>
</html> 