<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm'In</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>  
    <header class="bg-[#A8E6A3] h-[70px] flex items-center justify-between px-6 shadow-md relative z-10">
        
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" class="w-10 h-10">
            <h1 class="text-[#2E7D32] text-2xl font-bold">Farm'In</h1>
        </div>

        
        <div class="flex-grow text-center">
            
        </div>

        
        <div class="flex items-center space-x-6">
   
            <a href="{{ route('login') }}" class="px-4 py-2 rounded-full bg-[#2E7D32] text-white hover:bg-green-800 transition duration-300">Login</a>
            <a href="{{ route('register') }}" class="px-4 py-2 rounded-full border border-[#2E7D32] text-[#2E7D32] hover:bg-green-100 transition duration-300">Register</a>
        </div>
    </header>
</body>
</html>