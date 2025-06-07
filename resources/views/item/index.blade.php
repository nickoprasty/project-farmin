@extends('layouts.app')
@section('title', 'Daftar Item')
@section('content')
<a href="{{ route('item.create') }}" class="btnTambah" style="text-decoration: none; color: white; background-color: #37a46d; border-radius: 10px; padding: 5px; width: 100%; text-align: center;">Tambah Item</a>
<table class="tabelItem">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
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
                <a href="{{ route('item.edit', $item->id_item) }}" class="btnAksi aksiUbah" style="background-color: #37a46d; color: white; border-radius: 10px; padding: 5px;">Edit</a>
                <form action="{{ route('item.destroy', $item->id_item) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btnAksi aksiDelete" style="background-color: #37a46d; color: white; border-radius: 10px; padding: 5px;" onclick="return confirm('Yakin hapus item?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
