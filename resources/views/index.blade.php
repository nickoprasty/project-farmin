<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm'In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full overflow-x-hidden m-0 p-0 box-border bg-[#f9f7f4] font-['ubuntu']">
    <img src="{{ asset('img/background2.jpg') }}" alt="background" class="object-cover w-full fixed z-0 brightness-[80%] h-full">
    @include('header')
    <article class="text-center flex flex-col items-center relative top-[250px] z-10 max-w-full text-white text-lg font-medium">
        <h1 class="w-[500px]">WELCOME TO FARM'IN</h1><br>
        <p class="text-[20px] w-[500px]">Farm'In adalah platform digital yang membantu petani dalam mengakses informasi harga pasar, memesan pupuk dan bibit, serta berkomunikasi dengan komunitas pertanian.</p>
    </article>
    <div class="flex justify-center bg-[#f9f7f4] h-[350px] relative top-[450px] z-0 flex-wrap">
        <div class="w-[320px] max-w-[90%] p-[20px] text-justify m-[30px] min-h-[230px] bg-white text-[#2E7D32] shadow-[5px_5px_10px_rgba(0,0,0,0.1)] rounded-tr-[10px] rounded-tl-[10px] break-words overflow-hidden">
            <h3 class="bg-[#2E7D32] text-white h-[50px] text-center rounded-tr-[10px] rounded-tl-[10px] flex items-center justify-center font-semibold">Harga Pasar</h3>
            <p class="p-[10px] text-[#2E7D32]">Menu ini menyediakan informasi terkini tentang harga berbagai komoditas pertanian di pasar. Petani dan pelaku 
            usaha dapat memantau harga jual produk pertanian secara real-time agar bisa mengambil keputusan yang lebih baik dalam menjual hasil panennya </p>
        </div>
        <div class="w-[320px] max-w-[90%] p-[20px] text-justify m-[30px] min-h-[230px] bg-white text-[#2E7D32] shadow-[5px_5px_10px_rgba(0,0,0,0.1)] rounded-tr-[10px] rounded-tl-[10px] break-words overflow-hidden" >
            <h3 class="bg-[#2E7D32] text-white h-[50px] text-center rounded-tr-[10px] rounded-tl-[10px] flex items-center justify-center font-semibold">Pemesanan Pupuk</h3>
            <p class="p-[10px] text-[#2E7D32]">Fitur ini memungkinkan pengguna untuk memesan pupuk secara online. Petani dapat memilih jenis pupuk yang sesuai dengan kebutuhan pertaniannya, 
                melihat ketersediaan stok, dan melakukan transaksi dengan mudah melalui platform ini.</p>
        </div>
        <div class="w-[320px] max-w-[90%] p-[20px] text-justify m-[30px] min-h-[230px] bg-white text-[#2E7D32] shadow-[5px_5px_10px_rgba(0,0,0,0.1)] rounded-tr-[10px] rounded-tl-[10px] break-words overflow-hidden">
            <h3 class="bg-[#2E7D32] text-white h-[50px] text-center rounded-tr-[10px] rounded-tl-[10px] flex items-center justify-center font-semibold">Komunit Pertanian</h3>    
            <p class="p-[10px] text-[#2E7D32]">Tempat bagi petani, pedagang, dan pecinta pertanian untuk berbagi informasi, berdiskusi, serta mendapatkan tips dan solusi terkait pertanian. 
                Di sini, pengguna dapat bertukar pengalaman dan mendapatkan wawasan dari sesama petani atau ahli pertanian.</p>
        </div>
    </div>
    <div class="bg-white relative h-[450px] flex flex-col justify-center items-center">
        <h3 class="text-[#39464f] text-[25px] font-extrabold m-[20px] mt-[10px]">KENAPA MEMILIH KAMI?</h3>  
        <div class="flex flex-wrap">
            <div class="m-[20px] mt-[50px] text-[20px] w-[250px] text-center">
                <img src="{{ asset('img/time-twenty-four.png') }}" alt="time" class="w-[100px] h-[100px] mb-[50px] mx-auto">
                <h4>Harga Pasar yang Transparan & Terupdate</h4>
            </div>
            <div class="m-[20px] mt-[50px] text-[20px] w-[250px] text-center">
                <img src="{{ asset('img/shopping-cart-add.png') }}" alt="time" class="w-[100px] h-[100px] mb-[50px] mx-auto">
                <h4>Pemesanan Pupuk Mudah & Terjangkau</h4>
            </div>
            <div class="m-[20px] mt-[50px] text-[20px] w-[250px] text-center">
                <img src="{{ asset('img/handshake.png') }}" alt="time" class="w-[100px] h-[100px] mb-[50px] mx-auto">
                <h4>Komunitas Pertanian yang Aktif & Edukatif</h4>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>