<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananApiController extends Controller
{
    public function index()
    {
        return response()->json(Pemesanan::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nomor_ruangan' => 'required',
            'nama_pemesan' => 'required',
            'nama_kegiatan' => 'required',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'status' => 'required',
            'nomor_hp' => 'required',
        ]);

        $pemesanan = Pemesanan::create($data);

        return response()->json([
            'message' => 'Pemesanan berhasil ditambahkan.',
            'data' => $pemesanan
        ], 201);
    }

    public function show($id)
    {
        $pemesanan = Pemesanan::find($id);
        if (!$pemesanan) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json($pemesanan);
    }

    public function update(Request $request, $id)
    {
        $pemesanan = Pemesanan::find($id);
        if (!$pemesanan) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $pemesanan->update($request->all());

        return response()->json([
            'message' => 'Data berhasil diperbarui',
            'data' => $pemesanan
        ]);
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);
        if (!$pemesanan) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $pemesanan->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
