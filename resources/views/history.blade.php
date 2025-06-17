@extends('layouts.app')
@section('title', 'History Pembelian')
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
<div class="max-w-[1200px] mx-auto p-[20px] box-border">
    <h2 class="text-center mb-[30px] font-semibold">History Pembelian Pupuk</h2>
    @forelse($history as $row)
    <div class="history-card flex items-center border-[1px] w-[1000px] border-[#eee] rounded-[8px] mb-[20px] bg-white shadow-[0_2px_8px_rgba(0,0,0,0.04)] transition-shadow duration-200 hover:shadow-[0_4px_16px_rgba(0,0,0,0.08)]">
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
