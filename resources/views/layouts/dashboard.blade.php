<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        body { margin: 0; background: #fafafa; }
        .sidebar {
            width: 220px;
            background: #A8E6A3;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0; left: 0;
            display: flex;
            flex-direction: column;
            z-index: 100;
            color: #2E7D32
        }
        .sidebar h2 {
            text-align: center;
            margin: 0 0 20px 0;
            padding-top: 20px;
            font-size: 1.5em;
            letter-spacing: 2px;
   
            height: 40px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 15px 30px;
            display: block;
            transition: background 0.2s;
            color: #2E7D32
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #54c370
        }
        .main-content {
            margin-left: 220px;
            padding: 30px 40px;
            min-height: 100vh;
        }
        .topbar {
            justify-content: center;
            background: #A8E6A3;
            color: #2E7D32;
            font-weight: 500;
            height: 60px;
            margin-left: 220px;
            display: flex;
            align-items: center;
            padding: 0 40px;
            font-size: 1.2em;
            
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Farm'In</h2>
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('pupuk.index') }}" class="{{ request()->routeIs('pupuk.*') ? 'active' : '' }}">Produk</a>
        <a href="{{ route('harga_pasar') }}" class="{{ request()->routeIs('harga_pasar') ? 'active' : '' }}">Harga Pasar</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
    </div>
    <div class="topbar">
        @yield('topbar')
    </div>
    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>