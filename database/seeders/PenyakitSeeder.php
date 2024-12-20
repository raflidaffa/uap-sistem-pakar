<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penyakit;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyakits = [
            ['kode_penyakit' => 'P01', 'jenis_penyakit' => 'Sapi Ngorok (Septicemia Epizootica)'],
            ['kode_penyakit' => 'P02', 'jenis_penyakit' => 'Cacingan'],
            ['kode_penyakit' => 'P03', 'jenis_penyakit' => 'Penyakit Antrak (Radang Limpa)'],
            ['kode_penyakit' => 'P04', 'jenis_penyakit' => 'Pink Eye (Penyakit Mata)'],
            ['kode_penyakit' => 'P05', 'jenis_penyakit' => 'Kuku Busuk'],
            ['kode_penyakit' => 'P06', 'jenis_penyakit' => 'Perut Kembung'],
            ['kode_penyakit' => 'P07', 'jenis_penyakit' => 'TBC (Tuber Culosis)'],
            ['kode_penyakit' => 'P08', 'jenis_penyakit' => 'Surra (Penyakit Sapi Mubeng)'],
        ];

        foreach ($penyakits as $penyakit) {
            Penyakit::create($penyakit);
        }
    }
}
