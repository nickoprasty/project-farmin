@extends('layouts.dashboard')
@section('title', 'Daftar Pupuk')

@section('topbar')
    Produk (Pupuk)
@endsection

@section('content')
    <h2 class="mb-8 text-2xl text-center">Daftar Pupuk</h2>
    <div class="overflow-x-auto mx-auto max-w-5xl">
        <table class="w-full text-center border-collapse bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-[#39b777] text-white">
                <tr>
                    <th class="px-6 py-3 border border-gray-300 text-left text-sm font-semibold uppercase tracking-wider">Nama</th>
                    <th class="px-6 py-3 border border-gray-300 text-left text-sm font-semibold uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-3 border border-gray-300 text-center text-sm font-semibold uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pupuk as $p)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 border border-gray-200">{{ $p->nama_pupuk }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 border border-gray-200">Rp.{{ number_format($p->harga, 0, ',', '.') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 border border-gray-200 text-center">
                        <a href="{{ route('pupuk.edit', $p->id_pupuk) }}" class="inline-block bg-[#37a46d] text-white px-4 py-2 rounded-lg hover:bg-[#2e8b57] focus:outline-none focus:ring-2 focus:ring-[#37a46d] focus:ring-opacity-50 transition-colors duration-200">Edit</a>
                        <form action="{{ route('pupuk.destroy', $p->id_pupuk) }}" method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block bg-[#e74c3c] text-white px-4 py-2 rounded-lg hover:bg-[#c0392b] focus:outline-none focus:ring-2 focus:ring-[#e74c3c] focus:ring-opacity-50 transition-colors duration-200" onclick="return confirm('Yakin hapus pupuk ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 border border-gray-200">Tidak ada data pupuk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="my-5 text-center">
        <a href="{{ route('pupuk.create') }}" class="inline-block bg-[#37a46d] text-white rounded-lg px-6 py-3 font-semibold hover:bg-[#2e8b57] focus:outline-none focus:ring-2 focus:ring-[#37a46d] focus:ring-opacity-50 transition-colors duration-200">
            + Tambah Item
        </a>
    </div>
@endsection