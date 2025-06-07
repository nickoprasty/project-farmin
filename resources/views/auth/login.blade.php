<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body class="login" style="background-color: #A8E6A3;">
    <form action="{{ url('/login') }}" method="POST" id="formLogin">
        @csrf
        <div style="margin-top: 5px; margin-bottom: 20px;">
            <a href="{{ url('/') }}" id="btnHome" style="text-decoration: none; color: #52b16a;">home</a>
            <h2>LOGIN</h2>
        </div>
        @if(session('error'))
            <div style="color:red;">{{ session('error') }}</div>
        @endif
        <div id="username1">
            <label for="username">username: </label><br>
            <input type="text" name="username" id="username" required>
        </div>
        <div id="password1">
            <label for="password">password: </label><br>
            <input type="password" name="password" id="password" required>
        </div>
        <div style="margin-top: 10px; margin-bottom: 10px;">
            <button type="submit" id="btnLogin2" name="btnLogin2">LOGIN</button>
        </div>
        <div>
            <p>Tidak punya akun? <a href="{{ route('register') }}" id="buatAkun" style="color: #52b16a;">Buat disini</a></p>
        </div>
    </form>
</body>
</html>