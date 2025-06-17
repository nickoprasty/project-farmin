<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
  
    public function index()
    {
        $items = DB::table('item')->get();
        return view('item.index', compact('items'));
    }

    /**
     * 
     */
    public function create()
    {
        return view('item.create');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'nama_item' => 'required',
            'jenis_item' => 'required',
            'harga_item' => 'required|integer'
        ]);

        DB::table('item')->insert([
            'nama_item' => $request->nama_item,
            'jenis_item' => $request->jenis_item,
            'harga_item' => $request->harga_item
        ]);

        return redirect()->route('harga_pasar')->with('success', 'Item berhasil ditambahkan!');
    }

 
    public function show(string $id)
    {
        //
    }


    public function edit($id)
    {
        $item = DB::table('item')->where('id_item', $id)->first();
        return view('item.edit', compact('item'));
    }

 
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_item' => 'required',
            'jenis_item' => 'required',
            'harga_item' => 'required|integer'
        ]);

        DB::table('item')->where('id_item', $id)->update([
            'nama_item' => $request->nama_item,
            'jenis_item' => $request->jenis_item,
            'harga_item' => $request->harga_item
        ]);

        return redirect()->route('harga_pasar')->with('success', 'Item berhasil diupdate!');
    }

    public function destroy($id)
    {
        DB::table('item')->where('id_item', $id)->delete();
        return redirect()->route('harga_pasar')->with('success', 'Item berhasil dihapus!');
    }

    public function hargaPasar()
    {
        $items = \DB::table('item')->get();
        return view('admin.harga_pasar', compact('items'));
    }
}
