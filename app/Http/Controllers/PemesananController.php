<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $data = Pemesanan::all();
        return view('public.ruangan', compact('data'));
    }

    public function create()
    {
        return view('public.book');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_ruangan' => 'required',
            'nama_pemesan' => 'required',
            'nama_kegiatan' => 'required',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'status' => 'required',
            'nomor_hp' => 'required',
            'keterangan' => 'required',
        ]);

        Pemesanan::create($request->all());
        return redirect()->route('pemesanans.index')->with('success', 'Pemesanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        return view('public.book', compact('pemesanan'));
    }

    public function update(Request $request, $id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->update($request->all());
        return redirect()->route('pemesanans.index')->with('success', 'Pemesanan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Pemesanan::destroy($id);
        return redirect()->route('pemesanans.index')->with('success', 'Pemesanan berhasil dihapus.');
    }
}
