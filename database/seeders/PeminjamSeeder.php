<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peminjam;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
                'nama' => 'Perwira',
                'alamat' => 'Jl. Dieng 28',
                'no_telp' => '08123456789'
        ];

        Peminjam::create($data);
    }
}
