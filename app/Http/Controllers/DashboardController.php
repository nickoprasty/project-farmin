<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    // Untuk admin
    public function admin()
    {
        // Hitung total penjualan
        $total_penjualan = \DB::table('transaksi_pupuk')->sum('total_harga');
        return view('admin.dashboard', compact('total_penjualan'));
    }

    // Untuk user
    public function user()
    {
        $items = DB::table('item')->get();
        return view('user_dashboard', compact('items'));
    }
}
