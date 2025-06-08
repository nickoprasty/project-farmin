<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PupukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pupuk = DB::table('pupuk')->get();
        if (session('role') === 'admin') {
            return view('admin.produk', compact('pupuk'));
        }
        return view('menuBeli', compact('pupuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pupuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pupuk' => 'required|string|max:255',
            'harga' => 'required|integer',
            'gambar' => 'nullable|string|max:255',
            'deskripsi_pupuk' => 'nullable|string',
        ]);

        DB::table('pupuk')->insert([
            'nama_pupuk' => $request->nama_pupuk,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
            'deskripsi_pupuk' => $request->deskripsi_pupuk,
        ]);

        return redirect()->route('pupuk.index')->with('success', 'Pupuk berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pupuk = DB::table('pupuk')->where('id_pupuk', $id)->first();
        if (!$pupuk) {
            return redirect()->route('pupuk.index')->with('error', 'Pupuk tidak ditemukan!');
        }
        return view('pupuk.edit', compact('pupuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pupuk' => 'required|string|max:255',
            'harga' => 'required|integer',
            'gambar' => 'nullable|string|max:255',
            'deskripsi_pupuk' => 'nullable|string',
        ]);

        DB::table('pupuk')->where('id_pupuk', $id)->update([
            'nama_pupuk' => $request->nama_pupuk,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
            'deskripsi_pupuk' => $request->deskripsi_pupuk,
        ]);

        return redirect()->route('pupuk.index')->with('success', 'Pupuk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pupuk')->where('id_pupuk', $id)->delete();
        return redirect()->route('pupuk.index')->with('success', 'Pupuk berhasil dihapus!');
    }

    public function formPembelian(Request $request)
    {
        // Validasi parameter
        if (!$request->has(['id_pupuk', 'nama_pupuk'])) {
            return redirect()->route('menuBeli');
        }

        $id_pupuk = $request->id_pupuk;
        $nama_pupuk = $request->nama_pupuk;
        $pupuk = DB::table('pupuk')->where('id_pupuk', $id_pupuk)->first();

        return view('form_pembelian', compact('id_pupuk', 'nama_pupuk', 'pupuk'));
    }

    public function prosesPembelian(Request $request)
    {
        $request->validate([
            'id_pupuk' => 'required|integer',
            'jumlah' => 'required|integer|min:1',
            'alamat' => 'required|string',
            'no_hp' => 'required|string'
        ]);

        $id_user = session('id_user');
        if (!$id_user) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        $pupuk = DB::table('pupuk')->where('id_pupuk', $request->id_pupuk)->first();
        if (!$pupuk) {
            return redirect()->back()->with('error', 'Pupuk tidak ditemukan!');
        }

        $total_harga = $request->jumlah * $pupuk->harga;

        DB::table('transaksi_pupuk')->insert([
            'id_user' => $id_user,
            'id_pupuk' => $request->id_pupuk,
            'jumlah' => $request->jumlah,
            'total_harga' => $total_harga,
            'tanggal_transaksi' => now()
        ]);

        return redirect('/user_dashboard')->with('success', 'Pembelian berhasil!');
    }
}
