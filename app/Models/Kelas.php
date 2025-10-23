<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['id', 'nama'];
    public $timestamp = true;

    public function murid()
    {
        return $this->hasMany(Murid::class,'id_kelas');
    }
}
