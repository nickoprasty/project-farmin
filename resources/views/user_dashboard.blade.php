@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-[#A8E6A3] h-[70px] flex items-center justify-between shadow-[0px_4px_7px_rgba(0,0,0,0.1)] px-[10px]">
    <!-- Left group: Logo and Farm'In text -->
    <div class="flex items-center">
        <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" class="w-[40px] h-[40px] ml-[10px]">
        <h2 class="text-[#2E7D32] ml-[10px] font-semibold">Farm'In</h2>
    </div>

    <!-- Right group: Riwayat and Logout -->
    <div class="flex items-center">
        <!-- Riwayat div -->
        <div class="w-[100px] h-[70px] bg-[#A8E6A3] text-[#2E7D32] cursor-pointer hover:bg-[#54c370] flex items-center justify-center">
            <a href="{{ url('/history') }}" id="btnHistory" class="text-[#2E7D32] no-underline font-medium text-[15px] block w-full h-full flex justify-center items-center">Riwayat</a>
        </div>
        <!-- Logout form/button -->
        <form action="{{ route('logout') }}" method="POST" class="w-[100px] h-[70px] bg-[#A8E6A3] border-none text-[#2E7D32] cursor-pointer hover:bg-[#54c370] flex items-center justify-center">
            @csrf
            <button type="submit" class="w-full h-full bg-transparent border-none text-[#2E7D32] font-medium text-[15px] cursor-pointer">Logout</button>
        </form>
    </div>
</div>

<div class="max-w-[1200px] mx-auto p-[20px] box-border">
    <div class="bg-white rounded-[15px] shadow-[0_4px_8px_rgba(0,0,0,0.1)] p-[20px] mb-[30px]">
        <h2 class="text-[#2E7D32] mb-[20px] text-center font-semibold">HARGA PASAR</h2>
        <table class="w-[80%] border-collapse mt-[20px] relative left-[10%] bg-white">
            <thead>
                <tr>
                    <th class="bg-[#39b777] text-white p-[15px] text-center text-[1.2em] font-bold border-b-[3px] border-[#8c8c8c]">Nama</th>
                    <th class="bg-[#39b777] text-white p-[15px] text-center text-[1.2em] font-bold border-b-[3px] border-[#8c8c8c]">Jenis</th>
                    <th class="bg-[#39b777] text-white p-[15px] text-center text-[1.2em] font-bold border-b-[3px] border-[#8c8c8c]">Harga per Kilo (Kg)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr class="hover:bg-[#f5f5f5]">
                    <td class="p-[12px_15px] border-b-[1px] border-[#8c8c8c] text-center text-[1em]">{{ $item->nama_item }}</td>
                    <td class="p-[12px_15px] border-b-[1px] border-[#8c8c8c] text-center text-[1em]">{{ $item->jenis_item }}</td>
                    <td class="p-[12px_15px] border-b-[1px] border-[#8c8c8c] text-center text-[1em]">Rp.{{ number_format($item->harga_item, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="bg-white rounded-[15px] shadow-[0_4px_8px_rgba(0,0,0,0.1)] p-[30px] text-center">
        <h2 class="text-[#2E7D32] mb-[20px] font-semibold">Ingin Membeli Pupuk?</h2>
        <p>Silakan kunjungi halaman pembelian pupuk kami untuk melihat katalog lengkap dan melakukan pembelian.</p>
        <a href="{{ url('/menuBeli') }}" class="inline-block bg-[#39b777] text-white p-[15px_30px] rounded-[30px] no-underline font-semibold mt-[20px] border-none cursor-pointer hover:bg-[#74eaae]">Beli Pupuk Sekarang</a>
    </div>
</div>
@endsection