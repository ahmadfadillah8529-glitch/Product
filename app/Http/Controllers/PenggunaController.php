<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $pengguna = Pengguna::all();
      return view('penggunas.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penggunas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengguna = new Pengguna;
        $pengguna->id_pengguna = $request->id_pengguna;
        $pengguna->nama = $request->nama;
        $pengguna->save();

        session()->flash('success', 'Data berhasi di tambahkan');

        return redirect()->route('penggunas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('penggunas.show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('penggunas.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->id_pengguna = $request->id_pengguna;
        $pengguna->nama = $request->nama;
        $pengguna->save();

        session()->flash('success', 'Data berhasi di Edit');

        return redirect()->route('penggunas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengguna = Pengguna::findOrFail($id);

        //menghapus file cover jika ada
        // if ($posts->cover) {
        //     $filePath = public_path('images/post/' . $posts->cover);
        //     if (file::exists($filePath)) {
        //         file::delete($filePath);
        //     }
        // }
        $pengguna->delete();
        return redirect()->route('penggunas.index')->with('success', 'Data Berhasil di Hapus');
    }
}
