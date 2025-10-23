<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $telepon = Telepon::all();
        return view('telepon.index', compact('telepon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengguna = Pengguna::all();
        return view('telepon.create', compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'nomor' => 'required||max:100',
                
            ],
            [
                'nomor.required' => 'Nomor tidak boleh kosong',
            ],
        );

        $telepon = new Telepon;
        $telepon->nomor = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;
        $telepon->save();

        session()->flash('success', 'Data berhasi di tambahkan');

        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        return view('telepon.show', compact('telepon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        $pengguna = Pengguna::all();
        return view('telepon.edit', compact('telepon','pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate(
            [
                'nomor' => 'required||max:100',
                
            ],
            [
                'nomor.required' => 'Nomor tidak boleh kosong',
            ],
        );

        $telepon = Telepon::findOrFail($id);
        $telepon->nomor = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;
        $telepon->save();

        session()->flash('success', 'Data berhasi di Edit');

        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $telepon = Telepon::findOrFail($id);

        //menghapus file cover jika ada
        // if ($posts->cover) {
        //     $filePath = public_path('images/post/' . $posts->cover);
        //     if (file::exists($filePath)) {
        //         file::delete($filePath);
        //     }
        // }
        $telepon->delete();
        return redirect()->route('telepon.index')->with('success', 'Data Berhasil di Hapus');
    }
}
