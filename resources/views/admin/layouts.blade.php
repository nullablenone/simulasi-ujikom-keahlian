<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div
            class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out">
            <div class="text-2xl font-semibold text-center">
                Dashboard
            </div>
            <nav>
                <a href="{{ route('inventaris.index') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-tachometer-alt mr-2"></i>Inventaris
                </a>
                <a href="{{ route('peminjaman.index') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-users mr-2"></i>Peminjaman
                </a>
                <form method="POST" action="{{ route('logout') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    @csrf
                    <button type="submit" class="w-full text-left">
                        <i class="fas fa-box mr-2"></i>Logout
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden md:ml-64">

            <!-- Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
