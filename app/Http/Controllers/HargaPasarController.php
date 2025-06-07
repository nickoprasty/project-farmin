<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HargaPasarController extends Controller
{
    public function index()
    {
        $items = \DB::table('item')->get();
        return view('admin.harga_pasar', compact('items'));
    }
}
