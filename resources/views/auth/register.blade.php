<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body class="login" style="background-color: #A8E6A3;">
    <form action="{{ url('/register') }}" method="POST" id="formRegister">
        @csrf
        <div>
            <a href="{{ url('/') }}" id="btnHome" style="text-decoration: none; color: #52b16a;">home</a>
            <h2 style="padding: 10px;">DAFTAR AKUN</h2>
        </div>
        @if(session('error'))
            <div style="color:red;">{{ session('error') }}</div>
        @endif
        <div id="email1">
            <label for="email">email: </label><br>
            <input type="email" name="email" id="email" required>
        </div>
        <div id="username1">
            <label for="username">username: </label><br>
            <input type="text" name="username" id="username" required>
        </div>
        <div id="password1">
            <label for="password">password: </label><br>
            <input type="password" name="password" id="password" required>
        </div>
        <div style="margin-top: 10px; margin-bottom: 10px;">
            <button type="submit" id="btnRegister2" name="btnRegister2">BUAT AKUN</button>
        </div>
        <div>
            <p>Sudah punya akun? <a href="{{ route('login') }}" id="loginDisini" style="color: #52b16a;">Login disini</a></p>
        </div>
    </form>
</body>
</html>