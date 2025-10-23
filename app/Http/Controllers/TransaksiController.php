<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view("transaksi.index", compact("transaksi"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksi = Transaksi::all(); 
        $barang = Barang::all(); 
        $pembeli = Pembeli::all(); 
        return view("transaksi.create", compact('transaksi','barang','pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->save();

        session()->flash('success', 'Data berhasi di tambahkan');

        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $barang = Barang::all();
        $pembeli = Pembeli::all();
        return view('transaksi.edit', compact('transaksi','barang', 'pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->save();

        session()->flash('success', 'Data berhasi di Edit');

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);

        //menghapus file cover jika ada
        // if ($posts->cover) {
        //     $filePath = public_path('images/post/' . $posts->cover);
        //     if (file::exists($filePath)) {
        //         file::delete($filePath);
        //     }
        // }
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil di Hapus');
    }
}
