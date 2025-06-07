<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm'In</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <img src="{{ asset('img/background2.jpg') }}" alt="background" class="bgFront" style="background-size: cover; width: 100%; position: fixed; z-index: 0; filter: brightness(80%);">
    @include('header')
    <article class="artikel1">
        <h1>WELCOME TO FARM'IN</h1><br>
        <p style="font-size: 20px;">Farm'In adalah platform digital yang membantu petani dalam mengakses informasi harga pasar, memesan pupuk dan bibit, serta berkomunikasi dengan komunitas pertanian.</p>
    </article>
    <div class="homescreen">
        <div class="homescreen3 kontenhs1">
            <h3 style="background-color: #2E7D32; color: white; height: 50px; text-align: center; border-top-right-radius: 10px; border-top-left-radius: 10px;">Harga Pasar</h3>
            <p style="padding: 10px;">Menu ini menyediakan informasi terkini tentang harga berbagai komoditas pertanian di pasar. Petani dan pelaku 
            usaha dapat memantau harga jual produk pertanian secara real-time agar bisa mengambil keputusan yang lebih baik dalam menjual hasil panennya </p>
        </div>
        <div class="homescreen3 kontenhs1" >
            <h3 style="background-color: #2E7D32; color: white; height: 50px; text-align: center; border-top-right-radius: 10px; border-top-left-radius: 10px;">Pemesanan Pupuk</h3>
            <p style="padding: 10px;">Fitur ini memungkinkan pengguna untuk memesan pupuk secara online. Petani dapat memilih jenis pupuk yang sesuai dengan kebutuhan pertaniannya, 
                melihat ketersediaan stok, dan melakukan transaksi dengan mudah melalui platform ini.</p>
        </div>
        <div class="homescreen3 kontenhs1">
            <h3 style="background-color: #2E7D32; color: white; height: 50px; text-align: center; border-top-right-radius: 10px; border-top-left-radius: 10px;">Komunit Pertanian</h3>    
            <p style="padding: 10px;">Tempat bagi petani, pedagang, dan pecinta pertanian untuk berbagi informasi, berdiskusi, serta mendapatkan tips dan solusi terkait pertanian. 
                Di sini, pengguna dapat bertukar pengalaman dan mendapatkan wawasan dari sesama petani atau ahli pertanian.</p>
        </div>
    </div>
    <div class="homescreens2">
        <h3 style="color: #39464f;font-size: 25px; font-weight: 800; margin: 20px; margin-top: 10px;">KENAPA MEMILIH KAMI?</h3>  
        <div class="kontenhs2">
            <div class="kontenhs3">
                <img src="{{ asset('img/time-twenty-four.png') }}" alt="time" style="width: 100px; height: 100px; margin-bottom: 50px;">
                <h4>Harga Pasar yang Transparan & Terupdate</h4>
            </div>
            <div class="kontenhs3">
                <img src="{{ asset('img/shopping-cart-add.png') }}" alt="time" style="width: 100px; height: 100px; margin-bottom: 50px;">
                <h4>Pemesanan Pupuk Mudah & Terjangkau</h4>
            </div>
            <div class="kontenhs3">
                <img src="{{ asset('img/handshake.png') }}" alt="time" style="width: 100px; height: 100px; margin-bottom: 50px;">
                <h4>Komunitas Pertanian yang Aktif & Edukatif</h4>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>