<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function dataTransaksi()
    {
        $data = DB::table('transaksi_pupuk as t')
            ->join('pupuk as p', 't.id_pupuk', '=', 'p.id_pupuk')
            ->select('p.nama_pupuk', DB::raw('SUM(t.jumlah) as jumlah'))
            ->groupBy('p.nama_pupuk')
            ->get();

        return response()->json($data);
    }

    public function history()
    {
        // Pastikan user sudah login
        $id_user = session('id_user');
        if (!$id_user) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        // Ambil data transaksi user
        $history = \DB::table('transaksi_pupuk as t')
            ->join('pupuk as p', 't.id_pupuk', '=', 'p.id_pupuk')
            ->select(
                't.*',
                'p.nama_pupuk',
                'p.gambar',
                'p.harga as harga_pupuk'
            )
            ->where('t.id_user', $id_user)
            ->orderBy('t.tanggal_transaksi', 'desc')
            ->get();

        return view('history', compact('history'));
    }
}
