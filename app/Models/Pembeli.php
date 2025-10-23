<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $fillable = ['id', 'nama_pembeli', 'jenis_kelamin', 'telpon', ];
    public $barang = true;

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_barang');
    }
}
