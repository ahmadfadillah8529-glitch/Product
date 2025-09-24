<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Tips cepat Pintar',
                'content' => 'lorem ipsum',
            ],
            [
                'title' => 'Membangun Visi Misi Keluarga',
                'content' => 'lorem ipsum',
            ],
        ]);
    }
}
