<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = ['id', 'nama'];
    public $timestamp = true;

    public function telepon()
    {
        return $this->hasOne(Telepon::class,'id_pengguna');
    }
}
