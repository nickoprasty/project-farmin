@extends('layouts.app')

@section('title', 'Form Pembelian')

@section('content')
<div class="dashboard-content">
    <div class="buy-section">
        <h2>Form Pembelian Pupuk</h2>
        <form action="{{ route('proses_pembelian') }}" method="POST">
            @csrf
            <input type="hidden" name="id_pupuk" value="{{ $id_pupuk }}">
            
            <div style="margin-bottom: 20px;">
                <label for="nama_pupuk" style="display: block; margin-bottom: 5px;">Nama Pupuk:</label>
                <input type="text" id="nama_pupuk" value="{{ $nama_pupuk }}" readonly style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="harga" style="display: block; margin-bottom: 5px;">Harga per kg:</label>
                <input type="text" id="harga" value="Rp {{ number_format($pupuk->harga, 0, ',', '.') }}" readonly style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="jumlah" style="display: block; margin-bottom: 5px;">Jumlah (kg):</label>
                <input type="number" id="jumlah" name="jumlah" min="1" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="alamat" style="display: block; margin-bottom: 5px;">Alamat Pengiriman:</label>
                <textarea id="alamat" name="alamat" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 5px; height: 100px;"></textarea>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="no_hp" style="display: block; margin-bottom: 5px;">Nomor HP:</label>
                <input type="tel" id="no_hp" name="no_hp" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="text-align: center;">
                <button type="submit" class="buy-button">Konfirmasi Pembelian</button>
                <a href="{{ route('menuBeli') }}" style="display: inline-block; margin-left: 10px; color: #39b777; text-decoration: none;">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
