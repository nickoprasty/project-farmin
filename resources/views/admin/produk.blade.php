@extends('layouts.dashboard')
@section('title', 'Daftar Pupuk')

@section('topbar')
    Produk (Pupuk)
@endsection

@section('content')
    <h2 style="text-align: center; margin-bottom: 30px; margin-top: 20px;">Daftar Pupuk</h2>
    <div class="table-responsive" style="max-width:900px; margin:0 auto;">
    
        <table class="tabelItem" style="width:100%; text-align:center;">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pupuk as $p)
                <tr>
                    <td>{{ $p->nama_pupuk }}</td>
                    <td>Rp.{{ number_format($p->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('pupuk.edit', $p->id_pupuk) }}" class="btnAksi aksiUbah" style="background:#37a46d; color:#fff; border-radius:8px; padding:5px 15px; text-decoration:none;">Edit</a>
                        <form action="{{ route('pupuk.destroy', $p->id_pupuk) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btnAksi aksiDelete" style="background:#e74c3c; color:#fff; border-radius:8px; padding:5px 15px; border:none;" onclick="return confirm('Yakin hapus pupuk ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Tidak ada data pupuk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div style="margin-bottom: 20px;margin-top:40px; text-align: center;">
        <a href="{{ route('item.create') }}" class="btnTambah" style="background:#39b777; color:#fff; padding:10px 20px; border-radius:8px; text-decoration:none;">+ Tambah Item</a>
    </div>
@endsection