@extends('layouts.app')

@section('title', 'Menu Beli Pupuk')

@section('content')
<nav class="dashboard">
    <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" style="width: 40px; height: 40px; margin-top: 5px;">
    <div class="content konten1"><h2>Farm'In</h2></div>
    <form action="{{ url('/logout') }}" method="POST">
        @csrf
        <button class="content konten4" type="submit" name="btnLogout2">Logout</button>
    </form>
</nav>
@if($pupuk->count() > 0)
    <h3 style="text-align: center; margin-bottom: 50px; margin-top: 50px;">PUPUK</h3>
    <div class="containerBeli">
        @foreach($pupuk as $row)
            <div class="kontenBeli1">
                @if(!empty($row->gambar))
                    <img src="{{ asset('img/' . $row->gambar) }}" alt="{{ $row->nama_pupuk }}" style="width: 100%; height: 200px; object-fit: cover;">
                @endif
                <h3>{{ $row->nama_pupuk }}</h3>
                <p>{{ $row->deskripsi_pupuk }}</p>
                <form action="{{ url('form_pembelian') }}" method="GET">
                    <input type="hidden" name="id_pupuk" value="{{ $row->id_pupuk }}">
                    <input type="hidden" name="nama_pupuk" value="{{ $row->nama_pupuk }}">
                    <button type="submit" class="buttonBeli">Pesan</button>
                </form>
            </div>
        @endforeach
    </div>
@else
    <h3 style="text-align: center;">Tidak ada data pupuk</h3>
@endif
@endsection

