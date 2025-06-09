<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data = Peminjaman::all();
        return view('public.peminjaman', compact('data'));
    }

    public function create()
    {
        return view('public.form_peminjaman'); 
    }

    public function edit($id)
    {
        $data = Peminjaman::findOrFail($id);
        return view('public.form_peminjaman', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'status' => 'required|in:Sudah Dikembalikan,Belum Dikembalikan',
            'nomor_telepon' => 'required',
        ]);

        Peminjaman::create($request->all());
        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Peminjaman::destroy($id);
        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil dihapus!');
    }
}
