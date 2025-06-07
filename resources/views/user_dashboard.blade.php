@extends('layouts.app')

@section('content')
<nav class="dashboard">
    <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" style="width: 40px; height: 40px; margin-top: 5px;">
    <div class="content konten1"><h2>Farm'In</h2></div>
    <div class="content konten5"><a href="{{ url('/history') }}" id="btnHistory" style="color: #2E7D32; text-decoration: none;">Riwayat</a></div>
    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button class="content konten4" type="submit">Logout</button>
    </form>
</nav>
<div class="dashboard-content">
    <div class="price-section">
        <h2 style="text-align: center;">HARGA PASAR</h2>
        <table class="tabelItem">
            <thead class="theadItem">
                <tr>
                    <th style="text-align: center; font-size: 1.2em;">Nama</th>
                    <th style="text-align: center; font-size: 1.2em;">Jenis</th>
                    <th style="text-align: center; font-size: 1.2em;">Harga per Kilo (Kg)</th>
                </tr>
            </thead>
            <tbody class="tbodyItem">
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->nama_item }}</td>
                    <td>{{ $item->jenis_item }}</td>
                    <td>Rp.{{ number_format($item->harga_item, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="buy-section">
        <h2>Ingin Membeli Pupuk?</h2>
        <p>Silakan kunjungi halaman pembelian pupuk kami untuk melihat katalog lengkap dan melakukan pembelian.</p>
        <a href="{{ url('/menuBeli') }}" class="buy-button">Beli Pupuk Sekarang</a>
    </div>
</div>
@endsection