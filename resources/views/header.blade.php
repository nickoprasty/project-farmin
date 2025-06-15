<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm'In</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>  
    <div class="bg-[#A8E6A3] h-[70px] flex flex-wrap shadow-[0px_4px_7px_rgba(0,0,0,0.1)] relative z-10">
        <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" class="w-[40px] h-[40px] mt-[5px]">
        <div class="flex-grow-[3] text-[#2E7D32] m-[10px] p-[5px]"><h2>Farm'In</h2></div>
        <div class="flex-grow-[0] pt-[20px] text-center w-[100px] hover:bg-[#54c370]"><a href="{{ route('login') }}" id="btnLogin" class="text-[#2E7D32] no-underline">Login</a></div>
        <div class="flex-grow-[0] pt-[20px] text-center w-[100px] hover:bg-[#54c370]"><a href="{{ route('register') }}" id="btnRegister" class="text-[#2E7D32] no-underline">Register</a></div>
    </div>
</body>
</html>