<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['id', 'nama_barang', 'merek', 'harga', 'stok'];
    public $barang = true;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_barang');
    }
}
