<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::all();
        return view('murid.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('murid.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $murid = new Murid;
        $murid->nama = $request->nama;
        $murid->jk = $request->jk;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->tempat_lahir = $request->tempat_lahir;
        $murid->agama = $request->agama;
        $murid->alamat = $request->alamat;
        $murid->email = $request->email;
        $murid->id_kelas = $request->id_kelas;
        $murid->save();

        session()->flash('success', 'Data berhasi di tambahkan');

        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murid = Murid::findOrFail($id);
        return view('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murid = Murid::findOrFail($id);
        $kelas = Kelas::all();
        return view('murid.edit', compact('murid','kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate(
        //     [
        //         'nomor' => 'required||max:100',
                
        //     ],
        //     [
        //         'nomor.required' => 'Nomor tidak boleh kosong',
        //     ],
        // );

        $murid = Murid::findOrFail($id);
        $murid->nama = $request->nama;
        $murid->jk = $request->jk;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->tempat_lahir = $request->tempat_lahir;
        $murid->agama = $request->agama;
        $murid->alamat = $request->alamat;
        $murid->email = $request->email;
        $murid->id_kelas = $request->id_kelas;
        $murid->save();

        session()->flash('success', 'Data berhasi di Edit');

        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid = Murid::findOrFail($id);

        //menghapus file cover jika ada
        // if ($posts->cover) {
        //     $filePath = public_path('images/post/' . $posts->cover);
        //     if (file::exists($filePath)) {
        //         file::delete($filePath);
        //     }
        // }
        $murid->delete();
        return redirect()->route('murid.index')->with('success', 'Data Berhasil di Hapus');
    }
}
