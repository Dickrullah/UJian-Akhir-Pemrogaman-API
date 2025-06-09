<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuApiController extends Controller
{
    public function index()
    {
        return response()->json(Buku::all());
    }

    public function show($id)
    {
        $data = Buku::find($id);
        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'gambar' => 'nullable|string',
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_penerbitan' => 'required|numeric',
            'stok_buku' => 'required|numeric',
            'abstrak' => 'nullable|string',
            'kategori_buku' => 'required|string',
            'isbn' => 'required|string|unique:bukus,isbn',
        ]);

        $data = Buku::create($validated);
        return response()->json(['message' => 'Buku berhasil ditambahkan', 'data' => $data], 201);
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);
        if (!$buku) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'gambar' => 'nullable|string',
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_penerbitan' => 'required|numeric',
            'stok_buku' => 'required|numeric',
            'abstrak' => 'nullable|string',
            'kategori_buku' => 'required|string',
            'isbn' => 'required|string|unique:bukus,isbn,' . $id,
        ]);

        $buku->update($validated);
        return response()->json(['message' => 'Buku berhasil diperbarui', 'data' => $buku]);
    }

    public function destroy($id)
    {
        $buku = Buku::find($id);
        if (!$buku) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $buku->delete();
        return response()->json(['message' => 'Buku berhasil dihapus']);
    }
}
