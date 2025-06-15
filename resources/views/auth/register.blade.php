<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center h-screen m-0 bg-[#A8E6A3]">
    <form action="{{ url('/register') }}" method="POST" id="formRegister" class="relative flex flex-col h-[450px] w-[350px] items-center justify-center bg-white border border-black border-[1px] m-[10px] rounded-[5px] shadow-[2px_2px_5px_rgba(0,0,0,0.3)]">
        @csrf
        <div>
            <a href="{{ url('/') }}" id="btnHome" class="absolute top-[10px] left-[10px] text-[#52b16a] no-underline hover:text-[#a1edb4]">home</a>
            <h2 class="p-[10px]">DAFTAR AKUN</h2>
        </div>
        @if(session('error'))
            <div class="text-[#FF0000]">{{ session('error') }}</div>
        @endif
        <div id="email1" class="p-[5px] border-none mt-[8px]">
            <label for="email">email: </label><br>
            <input type="email" name="email" id="email" required class="w-full p-[10px] border-[2px] border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 hover:border-[#4CAF50] hover:bg-white hover:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none">
        </div>
        <div id="username1" class="p-[5px] border-none mt-[8px]">
            <label for="username">username: </label><br>
            <input type="text" name="username" id="username" required class="w-full p-[10px] border-[2px] border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 hover:border-[#4CAF50] hover:bg-white hover:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none">
        </div>
        <div id="password1" class="p-[5px] border-none mt-[8px]">
            <label for="password">password: </label><br>
            <input type="password" name="password" id="password" required class="w-full p-[10px] border-[2px] border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 hover:border-[#4CAF50] hover:bg-white hover:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none">
        </div>
        <div class="my-[10px]">
            <button type="submit" id="btnRegister2" name="btnRegister2" class="border-none bg-[#52b16a] text-white rounded-[30px] m-[10px] p-[10px] w-[200px] hover:bg-[#a1edb4]">BUAT AKUN</button>
        </div>
        <div>
            <p>Sudah punya akun? <a href="{{ route('login') }}" id="loginDisini" class="text-[#52b16a] hover:text-[#a1edb4]">Login disini</a></p>
        </div>
    </form>
</body>
</html>