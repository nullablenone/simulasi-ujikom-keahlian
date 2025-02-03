<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Inventaris')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Navbar -->
        <header class="mb-6">
            <nav class="flex justify-between items-center bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md">
                <h1 class="text-xl font-bold">Sistem Inventaris</h1>
                <ul class="flex gap-4">
                    <li><a href="{{ route('pengguna.peminjaman') }}" class="hover:underline">Peminjaman</a></li>
                    <li><a href="{{ route('pengguna.home') }}" class="hover:underline">Home</a></li>
                </ul>
            </nav>
        </header>

        <!-- Content -->
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
