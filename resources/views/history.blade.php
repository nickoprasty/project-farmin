@extends('layouts.app')
@section('title', 'History Pembelian')
@section('content')
<nav class="dashboard">
    <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" style="width: 40px; height: 40px; margin-top: 5px;">
    <div class="content konten1"><h2>Farm'In</h2></div>
    <div class="content konten5"><a href="{{ url('/user_dashboard') }}" id="btnHistory" style="color: #2E7D32; text-decoration: none;">Home</a></div>
    <form action="{{ url('/logout') }}" method="POST">
        @csrf
        <button class="content konten4" type="submit" name="btnLogout2">Logout</button>
    </form>
</nav>
<div class="dashboard-content">
    <h2 style="text-align:center; margin-bottom:30px;">History Pembelian Pupuk</h2>
    @forelse($history as $row)
    <div class="history-card" style="display:flex; align-items:center; border:1px solid #eee; border-radius:8px; margin-bottom:20px; background:#fff;">
        <img src="{{ asset('img/' . $row->gambar) }}" alt="{{ $row->nama_pupuk }}" style="width:100px; height:100px; object-fit:cover; border-radius:8px; margin:16px;">
        <div style="flex:1;">
            <div style="font-size:18px; font-weight:600;">{{ $row->nama_pupuk }}</div>
            @if(!empty($row->variasi))
                <div style="color:#888;">Variasi: {{ $row->variasi }}</div>
            @endif
            <div style="color:#888;">x{{ $row->jumlah }}</div>
            <div style="color:#f44336;">Rp.{{ $row->harga_pupuk }}</div>
        </div>
        <div style="text-align:right; min-width:180px; margin-right:24px;">
            @if(!empty($row->harga_asli) && $row->harga_asli > $row->total_harga)
                <span style="text-decoration:line-through; color:#aaa;">Rp{{ number_format($row->harga_asli,0,',','.') }}</span>
            @endif
            <span style="color:#f44336; font-weight:600; font-size:18px;">Rp{{ number_format($row->total_harga,0,',','.') }}</span>
        </div>
    </div>
    @empty
    <div style="text-align:center;">Belum ada transaksi pembelian.</div>
    @endforelse

    @if($history->count() > 0)
    <div style="text-align:right; margin-top:30px; font-size:20px;">
        <span>Total Pesanan: </span>
        <span style="color:#f44336; font-weight:700;">
            Rp{{ number_format($history->sum('total_harga'),0,',','.') }}
        </span>
    </div>
    @endif
</div>
@endsection
