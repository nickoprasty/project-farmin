@extends('layouts.dashboard')
@section('title', 'Edit Pupuk')

@section('content')
<div class="card" style="max-width: 600px; margin: 50px auto; padding: 20px;">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">EDIT PUPUK</h5>
        <a href="{{ route('pupuk.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <div class="card-body">
        <form action="{{ route('pupuk.update', $pupuk->id_pupuk) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_pupuk" class="form-label">Nama Pupuk</label>
                <input type="text" class="form-control @error('nama_pupuk') is-invalid @enderror" id="nama_pupuk" name="nama_pupuk" value="{{ old('nama_pupuk', $pupuk->nama_pupuk) }}" required>
                @error('nama_pupuk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $pupuk->harga) }}" required>
                @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Nama File Gambar</label>
                <input type="text" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ old('gambar', $pupuk->gambar) }}" required>
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi_pupuk" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('deskripsi_pupuk') is-invalid @enderror" id="deskripsi_pupuk" name="deskripsi_pupuk" rows="3" required>{{ old('deskripsi_pupuk', $pupuk->deskripsi_pupuk) }}</textarea>
                @error('deskripsi_pupuk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">UPDATE</button>
        </form>
    </div>
</div>
@endsection

