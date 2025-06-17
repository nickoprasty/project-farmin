<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        $id_user = Session::get('id_user');

        if (!$id_user) {
            
            return redirect('/login')->with('error', 'Silakan login untuk melihat riwayat pembelian.');
        }

        $history = \DB::table('transaksi_pupuk as t')
                    ->join('pupuk', 't.id_pupuk', '=', 'pupuk.id_pupuk')
                    ->where('t.id_user', $id_user)
                    ->select('t.*', 'pupuk.nama_pupuk', 'pupuk.harga as harga_pupuk', 'pupuk.gambar')
                    ->orderBy('tanggal_transaksi', 'desc')
                    ->get();

        return view('history', compact('history'));
    }
}
