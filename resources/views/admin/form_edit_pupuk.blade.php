@extends('layouts.dashboard')
@section('title', 'Edit Pupuk')

@section('content')
<div class="w-[450px] h-[400px] mx-auto p-[20px] bg-white rounded-[5px] shadow-[2px_2px_5px_rgba(0,0,0,0.3)] mt-[50px] border border-black flex flex-col items-center justify-center">
    <div class="flex justify-between items-center pb-[10px] mb-[20px] border-b-[1px] border-[#eee] w-full">
        <h5 class="mb-0 text-[1.25rem] font-medium font-semibold">EDIT PUPUKS</h5>
        <a href="{{ route('pupuk.index') }}" class="inline-block py-[10px] px-[20px] text-center no-underline cursor-pointer select-none border-none rounded-full text-white bg-[#52b16a] hover:bg-[#a1edb4]">Kembali</a>
    </div>
    <div class="card-body w-full">
        <form action="{{ route('pupuk.update', $pupuk->id_pupuk) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-[1rem] flex items-center w-full">
                <label for="nama_pupuk" class="w-[120px] mr-[5px]">Nama Pupuk</label>
                <input type="text" class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none @error('nama_pupuk') border-red-500 @enderror" id="nama_pupuk" name="nama_pupuk" value="{{ old('nama_pupuk', $pupuk->nama_pupuk) }}" required>
            </div>
            @error('nama_pupuk')
                <div class="text-red-500 text-sm mt-1 ml-[125px]">{{ $message }}</div>
            @enderror
            <div class="mb-[1rem] flex items-center w-full">
                <label for="harga" class="w-[120px] mr-[5px]">Harga</label>
                <input type="number" class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none @error('harga') border-red-500 @enderror" id="harga" name="harga" value="{{ old('harga', $pupuk->harga) }}" required>
            </div>
            @error('harga')
                <div class="text-red-500 text-sm mt-1 ml-[125px]">{{ $message }}</div>
            @enderror
            <div class="mb-[1rem] flex items-center w-full">
                <label for="gambar" class="w-[120px] mr-[5px]">Nama File Gambar</label>
                <input type="text" class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none @error('gambar') border-red-500 @enderror" id="gambar" name="gambar" value="{{ old('gambar', $pupuk->gambar) }}" required>
            </div>
            @error('gambar')
                <div class="text-red-500 text-sm mt-1 ml-[125px]">{{ $message }}</div>
            @enderror
            <div class="mb-[1rem] flex items-center w-full">
                <label for="deskripsi_pupuk" class="w-[120px] mr-[5px]">Deskripsi</label>
                <textarea class="flex-1 p-[10px] border-2 border-[#ccc] rounded-[8px] bg-[#f8f8f8] text-[16px] transition-all duration-300 focus:border-[#4CAF50] focus:bg-white focus:shadow-[0px_0px_8px_rgba(76,175,80,0.4)] focus:outline-none @error('deskripsi_pupuk') border-red-500 @enderror" id="deskripsi_pupuk" name="deskripsi_pupuk" rows="3" required>{{ old('deskripsi_pupuk', $pupuk->deskripsi_pupuk) }}</textarea>
            </div>
            @error('deskripsi_pupuk')
                <div class="text-red-500 text-sm mt-1 ml-[125px]">{{ $message }}</div>
            @enderror
            <button type="submit" class="block w-[200px] h-[100px] mx-auto mt-[10px] mb-[10px] py-[10px] px-[20px] text-center no-underline cursor-pointer select-none border-none rounded-full text-white bg-[#52b16a] hover:bg-[#a1edb4]">UPDATE</button>
        </form>
    </div>
</div>
@endsection

