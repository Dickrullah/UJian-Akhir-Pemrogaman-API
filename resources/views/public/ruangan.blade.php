@extends('layouts.navbar')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-dark">Daftar Pemesanan Ruangan</h2>
        <a href="{{ route('pemesanans.create') }}" class="btn btn-success rounded-3">Tambah Pemesanan</a>
    </div>

    <div class="table-responsive shadow-sm">
        <table class="table table-hover table-bordered rounded-3 overflow-hidden">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Ruangan</th>
                    <th>Nama</th>
                    <th>Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Status</th>
                    <th>HP</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center align-middle">
                @forelse ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nomor_ruangan }}</td>
                        <td>{{ $item->nama_pemesan }}</td>
                        <td>{{ $item->nama_kegiatan }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->waktu_mulai }}</td>
                        <td>{{ $item->waktu_selesai }}</td>
                        <td>
                            <span class="badge rounded-pill {{ $item->status == 'approved' ? 'bg-success' : 'bg-warning text-dark' }}">
                                {{ ucfirst($item->status) }}
                            </span>
                        </td>
                        <td>{{ $item->nomor_hp }}</td>
                        <td>
                            @if ($item->status == 'pending')
                                {{ $item->keterangan }}
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('pemesanans.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('pemesanans.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="text-center text-muted">Belum ada data pemesanan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
