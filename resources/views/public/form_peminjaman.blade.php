@extends('layouts.app') {{-- sesuaikan layout jika ada --}}

@section('content')
<div class="container mt-5">
    <h3>{{ isset($data) ? 'Edit' : 'Tambah' }} Peminjaman Buku</h3>

    <form action="{{ isset($data) ? route('peminjaman.update', $data->id) : route('peminjaman.store') }}" method="POST" class="mt-4">
        @csrf
        @if(isset($data))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
            <input type="text" class="form-control" name="nama_peminjam" value="{{ $data->nama_peminjam ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" name="judul_buku" value="{{ $data->judul_buku ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" name="tanggal_pinjam" value="{{ $data->tanggal_pinjam ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" name="tanggal_kembali" value="{{ $data->tanggal_kembali ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" name="status" required>
                <option value="">-- Pilih Status --</option>
                <option value="Belum Dikembalikan" {{ (isset($data) && $data->status == 'Belum Dikembalikan') ? 'selected' : '' }}>Belum Dikembalikan</option>
                <option value="Sudah Dikembalikan" {{ (isset($data) && $data->status == 'Sudah Dikembalikan') ? 'selected' : '' }}>Sudah Dikembalikan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="nomor_telepon" value="{{ $data->nomor_telepon ?? '' }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($data) ? 'Update' : 'Simpan' }}</button>
        <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
