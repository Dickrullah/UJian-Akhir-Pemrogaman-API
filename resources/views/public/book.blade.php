@extends('layouts.navbar')

@section('content')
<div class="container mt-5">
    <div class="card shadow rounded-4 border-0">
        <div class="card-header bg-gradient bg-primary text-white rounded-top-4">
            <h4 class="mb-0">{{ isset($pemesanan) ? 'Edit' : 'Tambah' }} Pemesanan Ruangan</h4>
        </div>
        <div class="card-body">
            <form action="{{ isset($pemesanan) ? route('pemesanans.update', $pemesanan->id) : route('pemesanans.store') }}" method="POST">
                @csrf
                @if(isset($pemesanan)) @method('PUT') @endif

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nomor Ruangan</label>
                        <input type="text" class="form-control rounded-3" name="nomor_ruangan" value="{{ $pemesanan->nomor_ruangan ?? '' }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control rounded-3" name="nama_pemesan" value="{{ $pemesanan->nama_pemesan ?? '' }}" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control rounded-3" name="nama_kegiatan" value="{{ $pemesanan->nama_kegiatan ?? '' }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control rounded-3" name="tanggal" value="{{ $pemesanan->tanggal ?? '' }}" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Waktu Mulai</label>
                        <input type="time" class="form-control rounded-3" name="waktu_mulai" value="{{ $pemesanan->waktu_mulai ?? '' }}" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Waktu Selesai</label>
                        <input type="time" class="form-control rounded-3" name="waktu_selesai" value="{{ $pemesanan->waktu_selesai ?? '' }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-select rounded-3" name="status">
                            <option value="pending" {{ (isset($pemesanan) && $pemesanan->status == 'pending') ? 'selected' : '' }}>Pending</option>
                            <option value="approved" {{ (isset($pemesanan) && $pemesanan->status == 'approved') ? 'selected' : '' }}>Approved</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nomor HP</label>
                        <input type="text" class="form-control rounded-3" name="nomor_hp" value="{{ $pemesanan->nomor_hp ?? '' }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Keterangan</label>
                        <input type="text" class="form-control rounded-3" name="keterangan" value="{{ $pemesanan->keterangan ?? '' }}" required>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-purple text-white rounded-3 px-4">
                        {{ isset($pemesanan) ? 'Update' : 'Simpan' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Custom style tambahan --}}
<style>
    .btn-purple {
        background-color: #6f42c1;
        border: none;
    }
    .btn-purple:hover {
        background-color: #5a33a8;
    }
</style>
@endsection
