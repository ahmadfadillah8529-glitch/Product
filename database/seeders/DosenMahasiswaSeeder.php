<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;
use App\Models\mahasiswa;

class DosenMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen1 = Dosen::create([
            'nama' => 'Ahmad Fadilah',
            'nipd'=> 'A005',
        ]);

        $dosen2 = Dosen::create([
            'nama' => 'M Jauf',
            'nipd'=> 'A006',
        ]);

        $dosen1->mahasiswas()->createMany([
            ['nama' => 'Galang Andreas','nim' => '123456'],
            ['nama' => 'Feri Ramdani','nim' => '1234567'],
        ]);

        $dosen2->mahasiswas()->createMany([
            ['nama' => 'Nur Aisyah', 'nim' => '123458'],
            ['nama' => 'Dewi Pertiwi', 'nim' => '123459'],
        ]);
    }
}
