<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - {{ config('app.name') }}</title>
    
    <!-- Styles -->
    @vite(['resources/css/admin/app.css', 'resources/css/admin/main.scss', 'resources/js/admin/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <!-- Admin Navigation -->
        <nav class="bg-white border-b border-gray-100 px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="font-bold text-xl text-gray-800">
                        {{ config('app.name') }} Admin
                    </a>
                </div>
                <div>
                    <a href="{{ route('home') }}" target="_blank" class="text-gray-600 hover:text-gray-900 mr-4">
                        <i class="ph ph-globe"></i> View Website
                    </a>
                    <button class="text-gray-600 hover:text-gray-900">
                        <i class="ph ph-sign-out"></i> Logout
                    </button>
                </div>
            </div>
        </nav>

        <!-- Sidebar and Main Content -->
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-64 bg-gray-800 min-h-screen">
                <div class="p-4">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2">
                                <i class="ph ph-chart-line mr-3 text-lg"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.books.index') }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2">
                                <i class="ph ph-books mr-3 text-lg"></i>
                                <span>Books</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="flex-1 p-8">
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Scripts -->
    @livewireScripts
    
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('showAlert', (message) => {
                alert(message);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const menuItems = document.querySelectorAll('.bg-gray-800 a');
            
            menuItems.forEach(item => {
                if (currentPath.includes(item.getAttribute('href'))) {
                    item.classList.add('bg-gray-700', 'text-white');
                }
            });
        });
    </script>

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</body>
</html> 