<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMLAB-RPL</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-slate-800 text-white">
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-wrap items-center justify-between gap-2">
            <span class="font-bold text-lg">SIMLAB-RPL</span>
            <div class="flex gap-4 text-sm">
                <a href="{{ route('dashboard') }}" class="hover:text-emerald-300">Dashboard</a>
                <a href="{{ route('barang.index') }}" class="hover:text-emerald-300">Inventaris</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-6">
        @if (session('success'))
            <div class="mb-4 rounded-lg bg-emerald-100 text-emerald-800 px-4 py-3">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>