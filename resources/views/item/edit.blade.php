@extends('layouts.app')
@section('title', 'Edit Item')
@section('content')
<div class="bodyTambahItem">
    <form action="{{ route('item.update', $item->id_item) }}" method="POST" class="formTambahItem">
        @csrf
        @method('PUT')
        <div>
            <a href="{{ url('/harga-pasar') }}" id="btnKembali" style="position: absolute; left: 10px; top: 10px; text-decoration: none; color: black; font-weight: 500; font-size: 13px;">Kembali</a>
        </div>
        <div style="margin-bottom: 20px;">
            <h3>EDIT ITEM</h3>
        </div>
        <div class="tambahNama">
            <label id="labelTambah" for="nama_item">Nama Item: </label>
            <input type="text" name="nama_item" id="nama_item" value="{{ $item->nama_item }}" required>
        </div>
        <div class="tambahJenis">
            <label id="labelTambah" for="jenis_item">Jenis Item: </label>
            <select name="jenis_item" id="jenis_item" style="width: 190px; margin-left: 5px;">
                <option value="sayur" {{ $item->jenis_item == 'sayur' ? 'selected' : '' }}>Sayur</option>
                <option value="buah" {{ $item->jenis_item == 'buah' ? 'selected' : '' }}>Buah</option>
            </select>
        </div>
        <div class="tambahHarga">
            <label id="labelTambah" for="harga_item">Harga Item: </label>
            <input type="number" name="harga_item" id="harga_item" value="{{ $item->harga_item }}" required>
        </div>
        <div>
            <button type="submit" id="btnTambahItem" style="border: none; background-color:#52b16a; color:white; width: 200px; height: 20px; border-radius: 20px; margin-top: 20px;">UPDATE</button>
        </div>
    </form>
</div>

@endsection
