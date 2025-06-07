<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm'In</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>  
    <div class="container">
        <img src="img/logo_farm'in.png" alt="logo farm'in" style="width: 40px; height: 40px; margin-top: 5px;">
        <div class="content konten1" style="color: #2E7D32;"><h2>Farm'In</h2></div>
        <div class="content konten2"><a href="{{ route('login') }}" id="btnLogin" style="color: #2E7D32; text-decoration: none;">Login</a></div>
        <div class="content konten3"><a href="{{ route('register') }}" id="btnRegister" style="color: #2E7D32; text-decoration: none;">Register</a></div>
    </div>
</body>
</html>