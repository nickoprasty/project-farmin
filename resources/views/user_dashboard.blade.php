@extends('layouts.app')

<header class="bg-[#A8E6A3] h-[70px] flex items-center justify-between px-6 shadow-md relative z-10">
    <div class="flex items-center space-x-3">
        <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" class="w-10 h-10">
        <h2 class="text-[#2E7D32] text-2xl font-bold">Farm'In</h2>
    </div>

    <div class="flex items-center space-x-4">
        <div class="h-full flex items-center justify-center">
            <a href="{{ url('/history') }}" id="btnHistory" class="text-[#2E7D32] text-lg font-medium hover:text-white transition duration-300 no-underline px-4 py-2 rounded-full">Riwayat</a>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="px-4 py-2 rounded-full bg-[#2E7D32] text-white text-lg font-medium hover:bg-green-800 transition duration-300 border-none cursor-pointer">Logout</button>
        </form>
    </div>
</header>

@section('content')
<div class="container mx-auto px-4 py-8 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <div class="bg-white rounded-xl shadow-xl p-6 border border-gray-100 flex flex-col">
            <h2 class="text-3xl font-extrabold text-green-800 text-center mb-6 border-b-2 border-green-200 pb-4">HARGA PASAR</h2>
            <div class="overflow-x-auto flex-grow">
                <table class="min-w-full bg-white rounded-lg overflow-hidden border border-gray-200">
                    <thead>
                        <tr class="bg-green-600 text-white text-lg">
                            <th class="py-3 px-4 text-center font-semibold border-b-2 border-green-700">Nama</th>
                            <th class="py-3 px-4 text-center font-semibold border-b-2 border-green-700">Jenis</th>
                            <th class="py-3 px-4 text-center font-semibold border-b-2 border-green-700">Harga per Kilo (Kg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr class="border-b border-gray-100 hover:bg-green-50 transition duration-200 ease-in-out">
                            <td class="py-3 px-4 text-lg text-gray-800 text-center">{{ $item->nama_item }}</td>
                            <td class="py-3 px-4 text-lg text-gray-800 text-center">{{ $item->jenis_item }}</td>
                            <td class="py-3 px-4 text-lg text-gray-800 text-center">Rp.{{ number_format($item->harga_item, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

       
        <div class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-xl shadow-2xl p-10 text-center flex flex-col justify-center items-center transition duration-300 ease-in-out transform hover:scale-102">
            <h2 class="text-4xl font-extrabold mb-4 animate-pulse">Ingin Membeli Pupuk?</h2>
            <p class="text-xl mb-8 leading-relaxed max-w-md">Jelajahi berbagai pilihan pupuk berkualitas tinggi untuk meningkatkan hasil panen Anda. Dapatkan harga terbaik sekarang!</p>
            <a href="{{ url('/menuBeli') }}" class="inline-block bg-white text-green-700 text-2xl font-bold px-12 py-5 rounded-full shadow-lg hover:bg-gray-100 transition duration-300 transform hover:scale-105">Beli Pupuk Sekarang &rarr;</a>
        </div>
    </div>
</div>
@endsection