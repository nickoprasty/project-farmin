@extends('layouts.app')
@section('title', 'History Pembelian')
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
<div class="max-w-[1200px] mx-auto p-[20px] box-border">
    <h2 class="text-center mb-[30px] font-semibold">History Pembelian Pupuk</h2>
    @forelse($history as $row)
    <div class="history-card flex items-center border-[1px] border-[#eee] rounded-[8px] mb-[20px] bg-white shadow-[0_2px_8px_rgba(0,0,0,0.04)] transition-shadow duration-200 hover:shadow-[0_4px_16px_rgba(0,0,0,0.08)]">
        <img src="{{ asset('img/' . $row->gambar) }}" alt="{{ $row->nama_pupuk }}" class="w-[100px] h-[100px] object-cover rounded-[8px] m-[16px]">
        <div class="flex-1">
            <div class="text-[18px] font-semibold">{{ $row->nama_pupuk }}</div>
            @if(!empty($row->variasi))
                <div class="text-[#888]">Variasi: {{ $row->variasi }}</div>
            @endif
            <div class="text-[#888]">x{{ $row->jumlah }}</div>
            <div class="text-[#f44336]">Rp.{{ $row->harga_pupuk }}</div>
        </div>
        <div class="text-right min-w-[180px] mr-[24px]">
            @if(!empty($row->harga_asli) && $row->harga_asli > $row->total_harga)
                <span class="line-through text-[#aaa]">Rp{{ number_format($row->harga_asli,0,',','.') }}</span>
            @endif
            <span class="text-[#f44336] font-semibold text-[18px]">Rp{{ number_format($row->total_harga,0,',','.') }}</span>
        </div>
    </div>
    @empty
    <div class="text-center">Belum ada transaksi pembelian.</div>
    @endforelse

    @if($history->count() > 0)
    <div class="text-right mt-[30px] text-[20px]">
        <span>Total Pesanan: </span>
        <span class="text-[#f44336] font-bold">
            Rp{{ number_format($history->sum('total_harga'),0,',','.') }}
        </span>
    </div>
    @endif
</div>
@endsection
