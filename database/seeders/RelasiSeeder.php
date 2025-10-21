<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mahasiswa;
use App\Models\wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $mahasiswa = Mahasiswa::create([
            'nama' => 'Ahmad Fadillah',
            'nim' => '123456',
        ]);

        Wali::create([
            'nama' => 'Pak Jarot',
            'id_mahasiswa' => $mahasiswa->id
        ]);
    }
}
