<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PupukController extends Controller
{
    
    public function index()
    {
        
        $pupuk = DB::table('pupuk')->select('id_pupuk', 'nama_pupuk', 'harga', 'gambar', 'deskripsi_pupuk')->get();
        if (session('role') === 'admin') {
            return view('admin.produk', compact('pupuk'));
        }
        return view('menuBeli', compact('pupuk'));
    }

    
    public function create()
    {
        return view('pupuk.create');
    }

    
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

    
    public function edit(string $id)
    {
        $pupuk = DB::table('pupuk')->where('id_pupuk', $id)->first();
        if (!$pupuk) {
            return redirect()->route('pupuk.index')->with('error', 'Pupuk tidak ditemukan!');
        }
        return view('pupuk.edit', compact('pupuk'));
    }

    
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

  
    public function destroy(string $id)
    {
        DB::table('pupuk')->where('id_pupuk', $id)->delete();
        return redirect()->route('pupuk.index')->with('success', 'Pupuk berhasil dihapus!');
    }

    public function formPembelian(Request $request)
    {
        
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
        Log::info('Metode prosesPembelian dipanggil.');
        $request->validate([
            'id_pupuk' => 'required|integer',
            'jumlah' => 'required|integer|min:1',
            'alamat' => 'required|string',
            'no_hp' => 'required|string'
        ]);

        $id_user = session('id_user');
        Log::info('ID User dari sesi: ' . $id_user);

        if (!$id_user) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        $pupuk = DB::table('pupuk')->where('id_pupuk', $request->id_pupuk)->first();
        if (!$pupuk) {
            return redirect()->back()->with('error', 'Pupuk tidak ditemukan!');
        }

        $total_harga = $request->jumlah * $pupuk->harga;

        $dataToInsert = [
            'id_user' => $id_user,
            'id_pupuk' => $request->id_pupuk,
            'jumlah' => $request->jumlah,
            'total_harga' => $total_harga,
            'tanggal_transaksi' => now()
        ];

        Log::info('Mencoba menyisipkan data transaksi: ' . json_encode($dataToInsert));

        try {
            DB::table('transaksi_pupuk')->insert($dataToInsert);
            Log::info('Transaksi berhasil dicatat ke database.');
            return redirect('/user_dashboard')->with('success', 'Pembelian berhasil!');
        } catch (\Exception $e) {
            Log::error('Gagal mencatat transaksi: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memproses pembelian. Silakan coba lagi.');
        }
    }
}
