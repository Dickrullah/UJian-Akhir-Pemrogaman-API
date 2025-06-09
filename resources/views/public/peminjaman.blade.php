@extends('layouts.navbar')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-7xl mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">📚 Daftar Peminjaman Buku</h2>
            <a href="{{ route('peminjaman.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Tambah Peminjaman</a>
        </div>

        <div class="overflow-x-auto shadow rounded-lg bg-white">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-100 text-blue-800 text-sm font-semibold text-center">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Judul Buku</th>
                        <th class="px-4 py-3">Tanggal Pinjam</th>
                        <th class="px-4 py-3">Tanggal Kembali</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">No. Telepon</th>
                        <th class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center text-sm divide-y divide-gray-100">
                    @forelse($data as $item)
                    <tr>
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $item->nama_peminjam }}</td>
                        <td class="px-4 py-2">{{ $item->judul_buku }}</td>
                        <td class="px-4 py-2">{{ $item->tanggal_pinjam }}</td>
                        <td class="px-4 py-2">{{ $item->tanggal_kembali }}</td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded-full text-xs font-medium 
                                {{ $item->status == 'Sudah Dikembalikan' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $item->status }}
                            </span>
                        </td>
                        <td class="px-4 py-2">{{ $item->nomor_telepon }}</td>
                        <td class="px-4 py-2 flex gap-2 justify-center">
                            <a href="{{ route('peminjaman.edit', $item->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="px-4 py-4 text-center text-gray-500">Belum ada data peminjaman.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>



@endsection