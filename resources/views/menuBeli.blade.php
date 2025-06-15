@extends('layouts.app')

@section('title', 'Menu Beli Pupuk')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-[#A8E6A3] h-[70px] flex flex-wrap shadow-[0px_4px_7px_rgba(0,0,0,0.1)] items-center">
    <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" class="w-[40px] h-[40px] mt-[5px]">
    <div class="flex-grow-[3] text-[#2E7D32] m-[10px] p-[5px] font-semibold"><h2>Farm'In</h2></div>
    <div class="flex-grow-[0] text-center w-[100px] h-[70px] bg-[#A8E6A3] text-[#2E7D32] cursor-pointer hover:bg-[#54c370] flex items-center justify-center">
        <a href="{{ url('/user_dashboard') }}" id="btnHistory" class="text-[#2E7D32] no-underline font-medium text-[15px]">Home</a>
    </div>
    <form action="{{ url('/logout') }}" method="POST">
        @csrf
        <button class="flex-grow-[1] w-[100px] h-[70px] bg-[#A8E6A3] border-none text-[#2E7D32] cursor-pointer font-medium text-[15px] text-center hover:bg-[#54c370] flex items-center justify-center" type="submit" name="btnLogout2">Logout</button>
    </form>
</nav>
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

