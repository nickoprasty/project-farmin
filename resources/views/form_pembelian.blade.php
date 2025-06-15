@extends('layouts.app')

@section('title', 'Form Pembelian')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<div class="max-w-[1200px] mx-auto p-[20px] box-border">
    <div class="bg-white rounded-[15px] shadow-[0_4px_8px_rgba(0,0,0,0.1)] p-[30px] text-center">
        <h2 class="text-[#2E7D32] mb-[20px]">Form Pembelian Pupuk</h2>
        <form action="{{ route('proses_pembelian') }}" method="POST">
            @csrf
            <input type="hidden" name="id_pupuk" value="{{ $id_pupuk }}">
            
            <div class="mb-[20px]">
                <label for="nama_pupuk" class="block mb-[5px]">Nama Pupuk:</label>
                <input type="text" id="nama_pupuk" value="{{ $nama_pupuk }}" readonly class="w-full p-[8px] border-[1px] border-[#ddd] rounded-[5px]">
            </div>

            <div class="mb-[20px]">
                <label for="harga" class="block mb-[5px]">Harga per kg:</label>
                <input type="text" id="harga" value="Rp {{ number_format($pupuk->harga, 0, ',', '.') }}" readonly class="w-full p-[8px] border-[1px] border-[#ddd] rounded-[5px]">
            </div>

            <div class="mb-[20px]">
                <label for="jumlah" class="block mb-[5px]">Jumlah (kg):</label>
                <input type="number" id="jumlah" name="jumlah" min="1" required class="w-full p-[8px] border-[1px] border-[#ddd] rounded-[5px]">
            </div>

            <div class="mb-[20px]">
                <label for="alamat" class="block mb-[5px]">Alamat Pengiriman:</label>
                <textarea id="alamat" name="alamat" required class="w-full p-[8px] border-[1px] border-[#ddd] rounded-[5px] h-[100px]"></textarea>
            </div>

            <div class="mb-[20px]">
                <label for="no_hp" class="block mb-[5px]">Nomor Telepon:</label>
                <input type="text" id="no_hp" name="no_hp" required class="w-full p-[8px] border-[1px] border-[#ddd] rounded-[5px]">
            </div>

            <div class="text-center">
                <button type="submit" class="inline-block bg-[#39b777] text-white p-[15px_30px] rounded-[30px] no-underline font-semibold mt-[20px] border-none cursor-pointer hover:bg-[#74eaae]">Konfirmasi Pembelian</button>
                <a href="{{ route('menuBeli') }}" class="inline-block ml-[10px] text-[#39b777] no-underline">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
