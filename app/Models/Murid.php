<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
        

    protected $fillable = ['id', 'nama', 'jk', 'tanggal_lahir', 'tempat_lahir', 'agama', 'alamat', 'email', 'id_kelas'];
    public $timestamp = true;

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
