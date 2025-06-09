<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanApiController extends Controller
{
    public function index()
    {
        return response()->json(Peminjaman::all());
    }

    public function show($id)
    {
        $data = Peminjaman::find($id);
        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'status' => 'required|in:Sudah Dikembalikan,Belum Dikembalikan',
            'nomor_telepon' => 'required',
        ]);

        $data = Peminjaman::create($validated);
        return response()->json(['message' => 'Data berhasil disimpan', 'data' => $data], 201);
    }

    public function update(Request $request, $id)
    {
        $data = Peminjaman::find($id);
        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'status' => 'required|in:Sudah Dikembalikan,Belum Dikembalikan',
            'nomor_telepon' => 'required',
        ]);

        $data->update($validated);
        return response()->json(['message' => 'Data berhasil diperbarui', 'data' => $data]);
    }

    public function destroy($id)
    {
        $data = Peminjaman::find($id);
        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $data->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}