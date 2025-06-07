@extends('layouts.dashboard')
@section('title', 'Tambah Pupuk')

@section('content')
<div class="bodyEditItem"> {{-- Gunakan class ini jika untuk centering form --}}
    <form action="{{ route('pupuk.store') }}" method="POST" class="formEditItem">
        @csrf
        <div>
            <a href="{{ route('pupuk.index') }}" id="btnKembali" style="position: absolute; left: 10px; top: 10px; text-decoration: none; color: black; font-weight: 500; font-size: 13px;">Kembali</a>
        </div>
        <div style="margin-bottom: 20px;">
            <h3>TAMBAH PUPUK</h3>
        </div>
        <div class="tambahNama"style="width: 80%;">
            <label id="labelTambah" for="nama_pupuk" >Nama Pupuk: </label>
            <input type="text" name="nama_pupuk" id="nama_pupuk" required style="margin-left: 50px;">
        </div>
        <div class="tambahHarga " style="width: 80%;">
            <label id="labelTambah" for="harga">Harga: </label>
            <input type="number" name="harga" id="harga" required style="margin-left: 100px;">
        </div>
        <div class="tambahJenis"style="width: 80%;">
            <label id="labelTambah" for="gambar">Nama File Gambar: </label>
            <input type="text" name="gambar" id="gambar" placeholder="contoh.jpg" style="margin-left: 10px;">
        </div>
        <div class="tambahJenis"style="width: 80%; display: flex; justify-content: left;">
            <label id="labelTambah" for="deskripsi_pupuk">Deskripsi: </label>
            <textarea style="margin-left: 80px; width: 300px;" name="deskripsi_pupuk" id="deskripsi_pupuk"></textarea>
        </div>
        <div>
            <button type="submit" id="btnTambahItem" style="border: none; background-color:#52b16a; color:white; width: 200px; height: 20px; border-radius: 20px; margin-top: 20px;">TAMBAH</button>
        </div>
    </form>
</div>
@endsection
