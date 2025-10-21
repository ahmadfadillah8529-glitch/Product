<?php

use App\Http\Controllers\RelasiController;
use App\Http\Controllers\Biodata2Controller;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenggunaController;
use App\Models\Siswa;
use App\Models\wali;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Hobi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function (){
    return 'Selamat datang di About';
});

Route::get('profile',function (){
    return 'Selamat datang di Profile';
});

Route::get('biodata/{nama_lengkap}/{tanggal_lahir}/{jenis_kelamin}/{tempat_lahir}/{alamat}/{agama}/{telepon}',
function ($nama_lengkap,$tanggal_lahir,$jk,$tempat_lahir,$alamat,$agama,$telepon){
    return '<h1>biodata</h1> <br>' . 
        "Nama Lengkap : $nama_lengkap <br>". 
        "Tanggal Lahir : $tanggal_lahir <br>".
        "Jenis Kelamin : $jk  <br>". 
        "Tempat Lahir : $tempat_lahir  <br>". 
        "Alamat : $alamat  <br> ". 
        "Agama : $agama <br>". 
        "Telepon : $telepon  <br>";
});

Route::get('hitung/{bilangan1}/{bilangan2}', function($bilangan1,$bilangan2,){
    $hasil = $bilangan1 + $bilangan2;
    return "Bilangan 1 : $bilangan1 <br>" . 
        "Bilangan 2 : $bilangan2 <br>" . 
        "hasil : $hasil";
});

Route::get('persegi/{sisi}', function($sisi){
    $hasil = $sisi * $sisi;
    return "Persegi   <br>" . 
        "Rumus Luas Persegi : SXS <br>" . 
        "hasil : $hasil";
});

Route::get('segitiga/{alas}/{tinggi}', function($alas,$tinggi){
    $hasil = 0.5 * $alas * $tinggi;
    return "segitiga   <br>" . 
        "Rumus Luas segitiga : 1/2 x alas x tinggi <br>" . 
        "hasil : $hasil";
});

Route::get('persegi_panjang/{panjang}/{lebar}', function($panjang,$lebar){
    $hasil = $panjang * $lebar;
    return "Persegi Panjang   <br>" . 
        "Rumus Luas Persegi Panjang : P x L <br>" . 
        "hasil : $hasil";
});

Route::get('lingkaran/{jari}', function($jari){
    $hasil = 3.14 * $jari * $jari;
    return "Lingkaran   <br>" . 
        "Rumus Luas Lingkaran : 3,14 x r <sup>2</sup> <br>" . 
        "hasil : $hasil";
});

Route::get('kopi/{nama}/{no}/{tanggal}/{jenis}/{menu}/{jumlah}', 
function($nama,$telepon,$tanggal_beli,$jenis,$menu,$jumlah){
    if ($jenis == "Makanan") {
    $Seblak  = 10000;
    $Pentol  = 15000;
    $Batagor = 20000;
    if ($menu == "Seblak") {
        $total = $Seblak * $jumlah ;
        $harga = 10000;
    }else if ($menu == "Pentol") {
        $total = $Pentol * $jumlah ;
        $harga = 15000;
    }else if ($menu == "Batagor") {
        $total = $Batagor * $jumlah ;
        $harga = 20000;
    }else {
        return "Menu tidak ada!!";
    }
    


    }else if ($jenis == "Minuman") {
    $Kopi  = 5000;
    $Jus  = 10000;
    $ThaiTea = 15000;
    if ($menu == "Kopi") {
        $total = $Kopi * $jumlah ;
        $harga = 5000;
    }else if ($menu == "Jus") {
        $total = $Jus * $jumlah ;
        $harga = 10000;
    }else if ($menu == "ThaiTea") {
        $total = $ThaiTea * $jumlah ;
        $harga = 15000;
    }else {
        return "Menu tidak ada!!";
    }
    }

    if ($total >= 40000) {
        $Diskon= 0.1;
    $totalAkhir = $Diskon * $total;
    $totalHarga = $total - $totalAkhir;
    }else {
    echo "Tidak ada diskon karena total kurang dari Rp.40000 <br>";
    }
        

    return "<h1>Assalaam Coffe</h1>" . 
            "Nama Pemesan : $nama <br>" . 
            "No Telepon : $telepon <br>" . 
            "Tanggal Beli : $tanggal_beli <br>" .
            "jenis  : $jenis <br>" . 
            "Menu : $menu <br>" . 
            "Harga  : $harga <br>" . 
            "Jumlah : $jumlah <br>" . 
            " ------------------------- <br>" . 
            "Total  : $total <br>" . 
            "Diskon 10%  : $totalAkhir <br>" . 
            "-------------------------- <br>" . 
            "Total Bayar  : $totalHarga <br>" ;

    

});

// routing view
route::get('halaman1', function(){

    $siswa=["Fadil", "Jaup", "Galang",];  

    return view('tampil1', compact('siswa'));
});

route::get('halaman2', function(){

    $makanan=["Seblak","Batagor","Mie Ayam","Baso","Nasi goreng","Nasi uduk","Martabak", "Basreng","Cimol", "Cilok"];

    return view('tampil2', compact('makanan'));
});

route::get('halaman3', function(){

    $minuman=["Teh Manis","Thai Tea","Jus Alpukat","Jus Mangga","Jus Apel","Es Jeruk","Pop Ice", "Kopi","Jellypoeter", "Power F"];

    return view('tampil3', compact('minuman'));
});

// route::get('post', [PostController::class, 'tampil']);
// route::get('post', function(){

//     // MENAMPILKAN DATA TERTENTU
//     // return $post= Post::find(1);

//     // MERUBAH DATA
//     // $post = Post::find(1);
//     // $post->content = "Harus belajar dengan giat";
//     // $post->save();
//     // return $post;

//     //MENGHAPUS DATA
//     // $post = Post::find(1);
//     // $post->delete();
//     // return $post;

//     //MENAMBAHKAN DATA
//     // $post = new Post;
//     // $post->title = "Menjadi musuh yang baik";
//     // $post->content = "Menjadi musuh yang baik adalah hal positif";
//     // $post->save();
//     // return $post;

//     // $post= Post::all();
//     // return view('halaman1', compact('post'));
// });

route::get('siswa', function(){

    $siswa = Siswa::all();
    return view('halaman2', compact('siswa'));

});

// route::get('biodata', [BiodataController::class, 'menampilkan']);

// route::get('biodata', function(){

//     // return $biodata = Biodata::where('nama_lengkap', 'like', '%ahmad%')->get();

//     // $biodata = new Biodata;
//     // $biodata->nama_lengkap = "Al frido";
//     // $biodata->jenis_kelamin = "Laki-laki";
//     // $biodata->tanggal_lahir = "2008-06-10";
//     // $biodata->tempat_lahir = "Bandung";
//     // $biodata->agama = "Islam";
//     // $biodata->alamat = "Cangkuang";
//     // $biodata->telepon = "08976543213";
//     // $biodata->email = "frido@gmail.com";
//     // $biodata->save();
//     // return $biodata;

//     // $biodata = Biodata::find(13);
//     // $biodata->id = "12";
//     // $biodata->save();
//     // return $biodata;

//     // $biodata = Biodata::find(12);
//     // $biodata->delete();
//     // return $biodata;


 
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'index'])->name('product');


// Route::get('biodata2', [App\Http\Controllers\Biodata2Controller::class, 'index']);
// Route::get('biodata2/store', [App\Http\Controllers\Biodata2Controller::class, 'store']);
// Route::get('biodata2/show', [App\Http\Controllers\Biodata2Controller::class, 'show']);
// Route::get('biodata2/update', [App\Http\Controllers\Biodata2Controller::class, 'update']);
// Route::get('biodata2/destroy', [App\Http\Controllers\Biodata2Controller::class, 'destroy']);


Route::resource('post', PostController::class);

Route::resource('biodata', Biodata2Controller::class);

Route::resource('penggunas', PenggunaController::class);

Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);
Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();
    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});
Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);
Route::get('/mahasiswa-ke-dosen', function () {
    $mhs = Mahasiswa::where('nim', '123456')->first();
    return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
});

Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);
Route::get('/hobi/bola', function () {
    $hobi = Hobi::where('nama_hobi', 'Bermain Bola')->first();
    foreach ($hobi->mahasiswas as $mhs) {
        echo $mhs->nama . '<br>';
    }
});

Route::get('eloquent', [RelasiController::class, 'eloquent']);
