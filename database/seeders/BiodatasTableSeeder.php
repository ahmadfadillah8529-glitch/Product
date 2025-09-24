<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            [
                'nama_lengkap' => 'Ahmad Fadilah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-04-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Kopo Permai 1',
                'telepon' => '0897654321',
                'email' => 'ahmad@gmail.com',
            ],
            [
                'nama_lengkap' => 'Rava Andrea',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-04-03',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Kopo Permai 1',
                'telepon' => '0897654322',
                'email' => 'galang@gmail.com',
            ],
            [
                'nama_lengkap' => 'M Jauf',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-08-20',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah',
                'telepon' => '0897654323',
                'email' => 'jauf@gmail.com',
            ],
            [
                'nama_lengkap' => 'Ilman Abidullah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-06-19',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'BMI',
                'telepon' => '0897654324',
                'email' => 'ilman@gmail.com',
            ],
            [
                'nama_lengkap' => 'Teguh Firmansyah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-04-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Rancamanyar',
                'telepon' => '0897654325',
                'email' => 'teguh@gmail.com',
            ],
            [
                'nama_lengkap' => 'Rehan Ramadhan',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-07-15',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Rancamanyar',
                'telepon' => '0897654326',
                'email' => 'rahan@gmail.com',
            ],
            [
                'nama_lengkap' => 'Muhammad Jihad',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-09-11',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah',
                'telepon' => '0897654327',
                'email' => 'jihad@gmail.com',
            ],
            [
                'nama_lengkap' => 'Davin ghaisan',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-10-20',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Rancamanyar',
                'telepon' => '0897654328',
                'email' => 'davin@gmail.com',
            ],
            [
                'nama_lengkap' => 'Feri Ramdhani',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-05-18',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Cibaduyut',
                'telepon' => '0897654329',
                'email' => 'feri@gmail.com',
            ],
            [
                'nama_lengkap' => 'Rudy Gunawan',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-20',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Rancamanyar',
                'telepon' => '08976543210',
                'email' => 'guna@gmail.com',
            ],
        ]);
    }
}
