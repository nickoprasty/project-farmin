@extends('layouts.dashboard')
@section('title', 'Harga Pasar')

@section('topbar')
    Harga Pasar
@endsection

@section('content')
    <h2 style="margin-bottom: 30px; text-align: center;">Harga Pasar</h2>
    <div class="table-responsive">
        <table class="tabelItem" style="width:100%; text-align:center;">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga per Kilo (Kg)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->nama_item }}</td>
                    <td>{{ $item->jenis_item }}</td>
                    <td>Rp.{{ number_format($item->harga_item, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('item.edit', $item->id_item) }}" class="btnAksi aksiUbah" style="background:#37a46d; color:#fff; border-radius:8px; padding:5px 15px; text-decoration:none;">Edit</a>
                        <form action="{{ route('item.destroy', $item->id_item) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btnAksi aksiDelete" style="background:#e74c3c; color:#fff; border-radius:8px; padding:5px 15px; border:none;" onclick="return confirm('Yakin hapus item?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="margin-bottom: 20px; text-align: center;">
        <a href="{{ route('item.create') }}" class="btnTambah" style="background:#39b777; color:#fff; padding:10px 20px; border-radius:8px; text-decoration:none;">+ Tambah Item</a>
    </div>
@endsection