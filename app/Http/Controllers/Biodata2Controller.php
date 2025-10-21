<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class Biodata2Controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodata = Biodata::all();
        return view('biodata.index', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate(
            [
                'nama_lengkap' => 'required|alpha_num|max:20',
                'jenis_kelamin' => 'required|string|max:20',
                'tanggal_lahir' => 'required|string',
                'tempat_lahir' => 'required|string|max:50',
                'agama' => 'required|string|max:20',
                'alamat' => 'required|string|max:225',
                'telepon' => 'required|string|max:225',
                'email' => 'required|email|max:225'
            ],
            [
                'nama_lengkap.required' => 'Nama Lengkap tidak boleh kosong',
                'nama_lengkap.alpha_num' => 'Hanya di isi dengan huruf',
                'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
                'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
                'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
                'agama.required' => 'Agama tidak boleh kosong',
                'alamat.required' => 'Alamat tidak boleh kosong',
                'telepon.required' => 'No Telepon tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
            ],
        );


        $biodata = new Biodata;
        $biodata->nama_lengkap = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->agama = $request->agama;
        $biodata->alamat = $request->alamat;
        $biodata->telepon = $request->telepon;
        $biodata->email = $request->email;
        if ($request->hasfile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $biodata->gambar = $name;
        };

        $biodata->save();

        session()->flash('success', 'Data berhasil di tambahkan');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.show', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $request->validate(
            [
                'nama_lengkap' => 'required|alpha_num|max:20',
                'jenis_kelamin' => 'required|string|max:20',
                'tanggal_lahir' => 'required|string',
                'tempat_lahir' => 'required|string|max:50',
                'agama' => 'required|string|max:20',
                'alamat' => 'required|string|max:225',
                'telepon' => 'required|string|max:225',
                'email' => 'required|email|max:225'
            ],
            [
                'nama_lengkap.required' => 'Nama Lengkap tidak boleh kosong',
                'nama_lengkap.alpha_num' => 'Hanya di isi dengan huruf',
                'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
                'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
                'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
                'agama.required' => 'Agama tidak boleh kosong',
                'alamat.required' => 'Alamat tidak boleh kosong',
                'telepon.required' => 'No Telepon tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
            ],
        );

        
        $biodata = Biodata::findOrFail($id);
        $biodata->nama_lengkap = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->agama = $request->agama;
        $biodata->alamat = $request->alamat;
        $biodata->telepon = $request->telepon;
        $biodata->email = $request->email;
        if ($request->hasfile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $biodata->gambar = $name;
        };

        $biodata->save();

        session()->flash('success', 'Data berhasil di Edit');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodata = Biodata::findOrFail($id);

        if ($biodata->gambar) {
            $filePath = public_path('images/post/' . $biodata->gambar);
            if (file::exists($filePath)) {
                file::delete($filePath);
            }
        }
        $biodata->delete();
        return redirect()->route('biodata.index')->with('success', 'Data Berhasil di Hapus');
    }
}
