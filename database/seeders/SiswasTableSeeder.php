<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('siswas')->insert([
            [
                'nama_lengkap' => 'Ahmad Fadilah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-04-24',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Rava Andrea',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-04-03',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'M Jauf',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-20',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Rehan Ramadhan',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-09-15',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Ilman Abidullah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-06-19',
                'kelas' => 'XI RPL 1',
            ],
        ]);
    }
}
