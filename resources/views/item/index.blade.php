@extends('layouts.app')
@section('title', 'Daftar Item')
@section('content')
<div class="max-w-7xl mx-auto p-4">
    <div class="w-full text-center mt-8 mb-4">
        <a href="{{ route('item.create') }}" class="inline-block bg-[#37a46d] text-white rounded-lg px-6 py-3 font-semibold hover:bg-[#2e8b57] focus:outline-none focus:ring-2 focus:ring-[#37a46d] focus:ring-opacity-50 transition-colors duration-200">
            + Tambah Item
        </a>
    </div>
    <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-[#39b777] text-white">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Nama</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Jenis</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Harga</th>
                <th class="px-6 py-3 text-center text-sm font-semibold uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr class="border-b border-gray-200 hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item->nama_item }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item->jenis_item }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Rp.{{ number_format($item->harga_item, 0, ',', '.') }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-center">
                    <a href="{{ route('item.edit', $item->id_item) }}" class="inline-block bg-[#37a46d] text-white px-4 py-2 rounded-lg hover:bg-[#2e8b57] focus:outline-none focus:ring-2 focus:ring-[#37a46d] focus:ring-opacity-50 transition-colors duration-200">Edit</a>
                    <form action="{{ route('item.destroy', $item->id_item) }}" method="POST" class="inline-block ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-block bg-[#e74c3c] text-white px-4 py-2 rounded-lg hover:bg-[#c0392b] focus:outline-none focus:ring-2 focus:ring-[#e74c3c] focus:ring-opacity-50 transition-colors duration-200" onclick="return confirm('Yakin hapus item?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
