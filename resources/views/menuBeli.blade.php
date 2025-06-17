@extends('layouts.app')

@section('title', 'Menu Beli Pupuk')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<header class="bg-[#A8E6A3] h-[70px] flex items-center justify-between px-6 shadow-md relative z-10">
    <div class="flex items-center space-x-3">
        <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" class="w-10 h-10">
        <h2 class="text-[#2E7D32] text-2xl font-bold">Farm'In</h2>
    </div>

    <div class="flex items-center space-x-4">
        <div class="h-full flex items-center justify-center">
            <a href="{{ url('/user_dashboard') }}" id="btnHistory" class="text-[#2E7D32] text-lg font-medium hover:text-white transition duration-300 no-underline px-4 py-2 rounded-full">Home</a>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="px-4 py-2 rounded-full bg-[#2E7D32] text-white text-lg font-medium hover:bg-green-800 transition duration-300 border-none cursor-pointer">Logout</button>
        </form>
    </div>
</header>
@if($pupuk->count() > 0)
    <h3 class="text-center mb-[50px] mt-[50px] font-semibold text-2xl">PUPUK</h3>
    <div class="flex flex-row flex-wrap items-center justify-around gap-[30px] p-[30px] max-w-[1200px] mx-auto">
        @foreach($pupuk as $row)
            <div class="border-none text-[#2E7D32] h-[500px] w-[calc(33.333%-20px)] min-w-[300px] box-border flex flex-col items-center p-[15px] relative bg-white rounded-[15px] shadow-[0_4px_8px_rgba(0,0,0,0.1)] overflow-hidden">
                @if(!empty($row->gambar))
                    <img src="{{ asset('img/' . $row->gambar) }}" alt="{{ $row->nama_pupuk }}" class="w-full h-[200px] object-cover mb-[15px] rounded-[10px]">
                @endif
                <h3 class="text-center m-0 mb-[15px] text-[#2E7D32] text-[1.4em] font-semibold">{{ $row->nama_pupuk }}</h3>
                <p class="text-justify mt-[10px] mb-[10px] flex-grow-[1] text-[#666] leading-[1.6] text-[0.95em]">{{ $row->deskripsi_pupuk }}</p>
                <form action="{{ url('form_pembelian') }}" method="GET">
                    <input type="hidden" name="id_pupuk" value="{{ $row->id_pupuk }}">
                    <input type="hidden" name="nama_pupuk" value="{{ $row->nama_pupuk }}">
                    <button type="submit" class="border-none bg-[#39b777] text-white rounded-[30px] px-[25px] py-[12px] w-[120px] absolute bottom-[15px] right-[15px] font-semibold cursor-pointer shadow-[0_2px_5px_rgba(0,0,0,0.1)] hover:bg-[#74eaae]">Pesan</button>
                </form>
            </div>
        @endforeach
    </div>
@else
    <h3 class="text-center">Tidak ada data pupuk</h3>
@endif
@endsection

