<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="m-0 bg-[#f9f7f4]">
    <div class="fixed top-0 left-0 flex flex-col w-[220px] h-screen text-[#2E7D32] bg-[#A8E6A3] z-50">
        <h2 class="pt-5 mb-5 text-2xl tracking-wide text-center">Farm'In</h2>
        <a href="{{ route('dashboard') }}" class="block px-8 py-4 text-[#2E7D32] no-underline transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-[#54c370]' : '' }}">Dashboard</a>
        <a href="{{ route('pupuk.index') }}" class="block px-8 py-4 text-[#2E7D32] no-underline transition-colors duration-200 {{ request()->routeIs('pupuk.*') ? 'bg-[#54c370]' : '' }}">Produk</a>
        <a href="{{ route('harga_pasar') }}" class="block px-8 py-4 text-[#2E7D32] no-underline transition-colors duration-200 {{ request()->routeIs('harga_pasar') ? 'bg-[#54c370]' : '' }}">Harga Pasar</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-8 py-4 text-[#2E7D32] no-underline transition-colors duration-200">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
    </div>
    <div class="flex items-center justify-center h-15 ml-[220px] px-10 text-lg font-medium text-[#2E7D32] bg-[#A8E6A3]">
        @yield('topbar')
    </div>
    <div class="min-h-screen ml-[220px] px-10 py-8">
        @yield('content')
    </div>
</body>
</html>