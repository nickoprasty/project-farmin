@extends('layouts.app')
@section('title', 'Tambah Pupuk')

@section('content')
<div class="h-screen flex items-center justify-center">
    <form action="{{ route('pupuk.store') }}" method="POST" class="w-[450px] h-[400px] p-[20px] bg-white border border-black rounded-[5px] shadow-[2px_2px_5px_rgba(0,0,0,0.3)] relative flex flex-col items-center justify-center">
        @csrf
        
        {{-- Tombol Kembali --}}
        <a href="{{ route('pupuk.index') }}" class="absolute top-[20px] left-[20px] no-underline text-black font-medium text-[13px]">Kembali</a>

        {{-- Judul TAMBAH PUPUK --}}
        <h3 class="text-center font-semibold text-[1.25rem] mb-[20px]">TAMBAH PUPUK</h3>

        {{-- Nama Pupuk --}}
        <div class="w-full flex items-center mb-[10px]">
            <label for="nama_pupuk" class="w-[180px] text-left">Nama Pupuk:</label>
            <input type="text" name="nama_pupuk" id="nama_pupuk" required class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none ml-[5px]">
        </div>
        @error('nama_pupuk')
            <div class="text-red-500 text-sm mt-1 ml-[185px] w-full text-left">{{ $message }}</div>
        @enderror

        {{-- Harga --}}
        <div class="w-full flex items-center mb-[10px]">
            <label for="harga" class="w-[180px] text-left">Harga:</label>
            <input type="number" name="harga" id="harga" required class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none ml-[5px]">
        </div>
        @error('harga')
            <div class="text-red-500 text-sm mt-1 ml-[185px] w-full text-left">{{ $message }}</div>
        @enderror

        {{-- Nama File Gambar --}}
        <div class="w-full flex items-center mb-[10px]">
            <label for="gambar" class="w-[180px] text-left">Nama File Gambar:</label>
            <input type="text" name="gambar" id="gambar" placeholder="contoh.jpg" class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none ml-[5px]">
        </div>
        @error('gambar')
            <div class="text-red-500 text-sm mt-1 ml-[185px] w-full text-left">{{ $message }}</div>
        @enderror

        {{-- Deskripsi --}}
        <div class="w-full flex items-center mb-[20px]">
            <label for="deskripsi_pupuk" class="w-[180px] text-left">Deskripsi:</label>
            <textarea class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none ml-[5px]" name="deskripsi_pupuk" id="deskripsi_pupuk"></textarea>
        </div>
        @error('deskripsi_pupuk')
            <div class="text-red-500 text-sm mt-1 ml-[185px] w-full text-left">{{ $message }}</div>
        @enderror

        {{-- Tombol TAMBAH --}}
        <div class="w-full text-center mt-[10px]">
            <button type="submit" class="border-none bg-[#52b16a] text-white w-[200px] py-[10px] px-[20px] rounded-full hover:bg-[#a1edb4] text-center">TAMBAH</button>
        </div>
    </form>
</div>
@endsection
