<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function menampilkan()
    {
        $biodata = Biodata::all();
        // return $biodata;
        return view('halaman_biodata2', compact('biodata'));
    }
}
