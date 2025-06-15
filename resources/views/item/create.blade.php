@extends('layouts.app')
@section('title', 'Tambah Item')
@section('content')
<div class="h-screen flex items-center justify-center">
    <form action="{{ route('item.store') }}" method="POST" class="w-[450px] h-[400px] p-[20px] bg-white border border-black rounded-[5px] shadow-[2px_2px_5px_rgba(0,0,0,0.3)] relative flex flex-col items-center justify-center">
        @csrf
        
        {{-- Tombol Kembali --}}
        <a href="{{ url('/harga-pasar') }}" class="absolute top-[20px] left-[20px] no-underline text-black font-medium text-[13px]">Kembali</a>

        {{-- Judul TAMBAH ITEM --}}
        <h3 class="text-center font-semibold text-[1.25rem] mb-[20px]">TAMBAH ITEM</h3>

        {{-- Nama Item --}}
        <div class="w-full flex items-center mb-[10px]">
            <label for="nama_item" class="w-[180px] text-left">Nama Item:</label>
            <input type="text" name="nama_item" id="nama_item" required class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none ml-[5px]">
        </div>
        @error('nama_item')
            <div class="text-red-500 text-sm mt-1 ml-[185px] w-full text-left">{{ $message }}</div>
        @enderror

        {{-- Jenis Item --}}
        <div class="w-full flex items-center mb-[10px]">
            <label for="jenis_item" class="w-[180px] text-left">Jenis Item:</label>
            <select name="jenis_item" id="jenis_item" class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none ml-[5px]">
                <option value="sayur">Sayur</option>
                <option value="buah">Buah</option>
            </select>
        </div>
        @error('jenis_item')
            <div class="text-red-500 text-sm mt-1 ml-[185px] w-full text-left">{{ $message }}</div>
        @enderror

        {{-- Harga Item --}}
        <div class="w-full flex items-center mb-[20px]">
            <label for="harga_item" class="w-[180px] text-left">Harga Item:</label>
            <input type="number" name="harga_item" id="harga_item" required class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none ml-[5px]">
        </div>
        @error('harga_item')
            <div class="text-red-500 text-sm mt-1 ml-[185px] w-full text-left">{{ $message }}</div>
        @enderror

        {{-- Tombol TAMBAH --}}
        <div class="w-full text-center mt-[10px]">
            <button type="submit" class="border-none bg-[#52b16a] text-white w-[200px] py-[10px] px-[20px] rounded-full hover:bg-[#a1edb4] text-center">TAMBAH</button>
        </div>
    </form>
</div>
@endsection
